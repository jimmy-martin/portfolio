<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

$router->addRoutes([
    [
        'GET',
        '/',
        [
            'method' => 'home',
            'controller' => '\Portfolio\Controllers\MainController'
        ],
        'main-home'
    ]
]);


$match = $router->match();

$dispatcher = new Dispatcher($match, '\Portfolio\Controllers\ErrorController::err404');

$dispatcher->dispatch();