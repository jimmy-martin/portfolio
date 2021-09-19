<?php

namespace Portfolio\Controllers;

use Portfolio\Models\Me;
use Portfolio\Models\Portfolio;

class MainController extends CoreController
{
    public function home()
    {
        $me = new Me();
        $skills = $me->getSkills();

        $portfolioModel = new Portfolio();
        $portfolio = $portfolioModel->getHomeProjects();

        $this->show('home/home', [
            'skills' => $skills,
            'portfolio' => $portfolio
        ]);
    }

    public function portfolio()
    {
        $portfolioModel = new Portfolio();
        $portfolio = $portfolioModel->getProjects();

        $this->show('portfolio/portfolio', [
            'portfolio' => $portfolio
        ]);
    }

    public function contact()
    {
        $this->show('partials/contact');
    }
}