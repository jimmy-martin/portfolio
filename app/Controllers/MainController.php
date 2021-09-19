<?php

namespace Portfolio\Controllers;

use Portfolio\Models\Me;

class MainController extends CoreController
{
    public function home()
    {
        $me = new Me();
        $skills = $me->getSkills();

        $this->show('home/home', [
            'skills' => $skills
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