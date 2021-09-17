<?php

namespace Portfolio\Controllers;

class CoreController
{
    /**
     * Render the views
     *
     * @param string $viewName
     * @param array $viewdatas
     * @return void
     */
    protected function show(string $viewName, array $viewDatas = [])
    {
        extract($viewDatas);

        require_once __DIR__ . '/../Views/layout/header.tpl.php';
        require_once __DIR__ . '/../Views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../Views/layout/footer.tpl.php';
    }
}