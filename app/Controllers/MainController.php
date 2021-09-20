<?php

namespace Portfolio\Controllers;

use Portfolio\Models\Me;

class MainController extends CoreController
{

    public function home()
    {
        $me = new Me();
        $skills = $me->getSkills();
        $systems = $me->getSystems();
        $utils = $me->getUtils();
        $softwares = $me->getSoftwares();    

        $this->show('home/home', [
            'skills' => $skills,
            'systems' => $systems,
            'utils' => $utils,
            'softwares' => $softwares
        ]);
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