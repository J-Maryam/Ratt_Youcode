<?php

class Team
{
    private $nom, $coach;

    public function __construct($nom, $coach)
    {
        $this->nom = $nom;
        $this->coach = $coach;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getCoach()
    {
        return $this->coach;
    }

    public function getDetails()
    {
        echo "L'equipe: $this->nom, le coach: $this->coach";
    }

}