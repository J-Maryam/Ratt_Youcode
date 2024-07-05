<?php

namespace Classes;
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


    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $coach
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;
    }

    public function ajouterEquipe($nom, $entraineur)
    {
        $team = new Team($nom, $entraineur);
        $this->teams[] = $team;
    }

    public function getDetails()
    {
        echo "L'equipe: $this->nom, le coach: $this->coach";
    }
}