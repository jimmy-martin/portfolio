<?php

namespace Portfolio\Models;

class Me
{
    protected string $lastname = 'Martin';
    protected string $firstname = 'Jimmy';
    protected int $age = 21;
    protected string $profile = 'Développeur PHP / Symfony';
    protected string $email = 'jimmy.martin952@gmail.com';
    protected array $skills = [
        ['PHP', 90],
        ['Symfony', 90],
        ['Bootstrap', 70],
        ['JavaScript', 60],
        ['HTML', 75],
        ['CSS', 75]
    ];
    protected string $presentation1 = "Hello, moi, c'est Jimmy, j'habite en région parisienne.";
    protected string $presentation2 = "Passionné d'informatique, j'ai d'abord entrepris un BTS SIO (Services Informatiques aux Organisations option SLAM (Solutions Logicielles et Applications Métier)) que j'ai arrêté car la pédagogie de l'école et le programme ne me convenaient pas.";
    protected string $presentation3 = "Après 2 années à travailler dans un tout autre domaine (la restauration), j'ai décidé de reprendre mes études en passant par une formation Développeur Web et Web Mobile que propose l'école O'clock dans laquelle je suis actuellement et qui se finit en Décembre 2021.";
    protected string $presentation4 = "Après cette formation, j'aimerais continuer mes études par le moyen de l'alternance. Ainsi, si mon profil vous intéresse, je vous laisse utiliser le formulaire de contact ou bien mes liens vers mes différents réseaux sociaux afin de me contacter.";


    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age . ' ans';
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of profil
     */ 
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfile(string $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of skills
     */ 
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set the value of skills
     *
     * @return  self
     */ 
    public function setSkills(array $skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get the value of presentation1
     */ 
    public function getPresentation1()
    {
        return $this->presentation1;
    }

    /**
     * Set the value of presentation1
     *
     * @return  self
     */ 
    public function setPresentation1($presentation1)
    {
        $this->presentation1 = $presentation1;

        return $this;
    }

    /**
     * Get the value of presentation2
     */ 
    public function getPresentation2()
    {
        return $this->presentation2;
    }

    /**
     * Set the value of presentation2
     *
     * @return  self
     */ 
    public function setPresentation2($presentation2)
    {
        $this->presentation2 = $presentation2;

        return $this;
    }

    /**
     * Get the value of presentation3
     */ 
    public function getPresentation3()
    {
        return $this->presentation3;
    }

    /**
     * Set the value of presentation3
     *
     * @return  self
     */ 
    public function setPresentation3($presentation3)
    {
        $this->presentation3 = $presentation3;

        return $this;
    }

    /**
     * Get the value of presentation4
     */ 
    public function getPresentation4()
    {
        return $this->presentation4;
    }

    /**
     * Set the value of presentation4
     *
     * @return  self
     */ 
    public function setPresentation4($presentation4)
    {
        $this->presentation4 = $presentation4;

        return $this;
    }

}