<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

$router->addRoutes([
    // Page d'accueil
    [
        'GET',
        '/',
        [
            'method' => 'home',
            'controller' => '\Portfolio\Controllers\MainController'
        ],
        'main-home'
    ],

    // Portfolio
    [
        'GET',
        '/portfolio',
        [
            'method' => 'portfolio',
            'controller' => '\Portfolio\Controllers\MainController'
        ],
        'main-portfolio'
    ],

    // Contact
    [
        'GET',
        '/contact',
        [
            'method' => 'contact',
            'controller' => '\Portfolio\Controllers\MainController'
        ],
        'main-contact'
    ],

    // Contact
    [
        'POST',
        '/contact',
        [
            'method' => 'mail',
            'controller' => '\Portfolio\Controllers\MainController'
        ],
        'main-mail'
    ]
]);


$match = $router->match();

$dispatcher = new Dispatcher($match, '\Portfolio\Controllers\ErrorController::err404');

$dispatcher->dispatch();