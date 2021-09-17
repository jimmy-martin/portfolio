<?php

namespace Portfolio\Controllers;

class MainController extends CoreController
{
    public function home()
    {
        $this->show('home/home');
    }

    public function portfolio()
    {
        $this->show('portfolio/portfolio');
    }

    public function contact()
    {
        $this->show('partials/contact');
    }
}