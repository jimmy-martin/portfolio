<?php

namespace Portfolio\Controllers;

use Portfolio\Models\Me;
use Portfolio\Models\Portfolio;

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
        global $router;
        
        $viewDatas['currentPage'] = $viewName;
        $viewDatas['me'] = new Me();

        $portfolioModel = new Portfolio();

        $portfolioModel->addProject(
            'Pokédex',
            "Projet réalisé dans le cadre d'une journée libre de ma formation (réviser les notions apprises depuis le début de ma formation).",
            "Pokédex est une sorte de dictionnaire de tous les pokémon. Ces derniers possèdent des caractéristiques de combat appelées statistiques et un ou deux types (plante, roche, feu, etc&hellip;).",
            'pokedex',
            'PHP',
            'https://github.com/jimmy-martin/pokedex'
        );

        $portfolioModel->addProject(
            'Todo list',
            "Side project réalisé from scratch en parallèle de la formation",
            "On ne présente plus la todo list. Ceci est un projet qui m'a permis de manipuler une base de données avec MySQL",
            'todo_list',
            'PHP',
            'https://github.com/jimmy-martin/todolist-php'
        );

        $portfolioModel->addProject(
            'Quote app',
            "Projet réalisé dans le cadre d'une journée libre de ma formation (réviser les notions apprises depuis le début de ma formation).",
            "Ce pojet m'a permis de revoir le langage JavScript avec notamment de la manipulation de DOM",
            'quote_app',
            'JavaScript',
            'https://github.com/jimmy-martin/quote-app',
            'https://quote-app-jimmy.netlify.app/'
        );

        $portfolioModel->addProject(
            "Natur'hair",
            "Side project réalisé from scratch en parallèle de la formation",
            "Petit projet permettant de lister des produits et de les ajouter à notre routine capillaire",
            'natur-hair',
            'JavaScript',
            'https://github.com/jimmy-martin/natural-hair'
        );

        $portfolioModel->addProject(
            'Snake',
            "Projet réalisé dans le cadre d'une formation en ligne sur UDEMY",
            "Ce projet m'a notamment permis de découvrir le JavaScript",
            'snake',
            'JavaScript',
            '',
            'https://snake-jim.netlify.app'
        );

        $portfolioModel->addProject(
            'Juste Prix',
            "Mini-projet réalisé dans le cadre d'un tutoriel sur Youtube",
            "Ceci est un petit projet que j'ai effectué lorsque j'ai découvert le développement Web et la programmation en général",
            'juste_prix',
            'JavaScript',
            '',
            'https://justeprix-jim.netlify.app/'
        );

        $portfolio = $portfolioModel->getProjects();
        $portfolioPreview = $portfolioModel->getHomeProjects();

        $viewDatas['portfolio'] = $portfolio;
        $viewDatas['portfolioPreview'] = $portfolioPreview; 

        extract($viewDatas);
        dump($viewDatas);

        require_once __DIR__ . '/../Views/layout/header.tpl.php';
        require_once __DIR__ . '/../Views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../Views/layout/footer.tpl.php';
    }
}
