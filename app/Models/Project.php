<?php

namespace Portfolio\Models;

class Project
{
    protected string $name;
    protected string $subtitle;
    protected string $desc;
    protected string $imageUrl;
    protected string $mainLanguage;
    protected string $githubLink;
    protected string $siteLink;


    /**
     * Create a project
     *
     * @param string $name Name
     * @param string $desc Description
     * @param string $imageUrl Name of your image (must be placed in assets/img folder and .png)
     * @param string $main_language Main language
     * @param string $subtitle Subtitle
     * @param string $github_link GitHub repository link
     * @param string $site_link Site link
     * @return void
     */
    public function __construct(string $name, string $desc, string $imageUrl, string $main_language, string $github_link, string $subtitle = '', string $site_link = '')
    {
        $this->name = $name;
        $this->subtitle = $subtitle;
        $this->desc = $desc;
        $this->imageUrl = $imageUrl;
        $this->mainLanguage = $main_language;
        $this->githubLink = $github_link;
        $this->siteLink = $site_link;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of subtitle
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */ 
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of desc
     */ 
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     *
     * @return  self
     */ 
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get the value of imageUrl
     */ 
    public function getImageUrl()
    {
        return 'assets/img/' . $this->imageUrl . '.png';
    }

    /**
     * Set the value of imageUrl
     *
     * @return  self
     */ 
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get the value of mainLanguage
     */ 
    public function getMainLanguage()
    {
        return $this->mainLanguage;
    }

    /**
     * Set the value of mainLanguage
     *
     * @return  self
     */ 
    public function setMainLanguage($mainLanguage)
    {
        $this->mainLanguage = $mainLanguage;

        return $this;
    }

    /**
     * Get the value of githubLink
     */ 
    public function getGithubLink()
    {
        return $this->githubLink;
    }

    /**
     * Set the value of githubLink
     *
     * @return  self
     */ 
    public function setGithubLink($githubLink)
    {
        $this->githubLink = $githubLink;

        return $this;
    }

    /**
     * Get the value of siteLink
     */ 
    public function getSiteLink()
    {
        return $this->siteLink;
    }

    /**
     * Set the value of siteLink
     *
     * @return  self
     */ 
    public function setSiteLink($siteLink)
    {
        $this->siteLink = $siteLink;

        return $this;
    }
}
