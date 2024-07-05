<?php

namespace Classes;
class Team
{
    private $nom, $coach, $joueur = [];

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
     * @return array
     */
    public function getJoueur()
    {
        return $this->joueur;
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


    /**
     * @param array $joueur
     */
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;
    }

    public function addPlayer(Joueur $joueur) {
        $this->joueur[] = $joueur;
    }

    public function getDetails()
    {
        echo "L'equipe: $this->nom, le coach: $this->coach";
    }
}