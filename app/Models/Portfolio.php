<?php

namespace Portfolio\Models;

class Portfolio
{
    protected array $projects = [];

    /**
     * Add a project to portfolio
     *
     * @param string $name Name
     * @param string $desc Description
     * @param string $imageUrl Name of your image (must be placed in assets/img folder)
     * @param string $main_language Main language
     * @param string $subtitle Subtitle
     * @param string $github_link GitHub repository link
     * @param string $site_link Site link
     * @return void
     */
    public function addProject(string $name, string $desc, string $imageUrl, string $main_language, string $github_link, string $subtitle = '', string $site_link = '')
    {
        $project = [
            'name' => $name,
            'subtitle' => $subtitle,
            'desc' => $desc,
            'image' => $imageUrl,
            'main_language' => $main_language,
            'github' => $github_link,
            'site' => $site_link
        ];

        array_push($this->projects, $project);
    }
    
    /**
     * Get the value of all projects
     */ 
    public function getProjects()
    {
        return krsort($this->projects);
    }

    /**
     * Get the value of home projects
     */ 
    public function getHomeProjects()
    {
        // Ordered by key descending
        krsort($this->projects);
        // Return only the 6 first projects of the sorted array
        return array_slice($this->projects, 0, 6);
    }


}