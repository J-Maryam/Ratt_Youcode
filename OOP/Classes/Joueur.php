<?php

namespace Classes;
class Joueur
{
    private $nom, $dateNaissance, $position, $equipe;

    public function __construct($nom, $dateNaissance, $position, $equipe)
    {
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;
        $this->position = $position;
        $this->equipe = $equipe;
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
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @param mixed $equipe
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;
    }

    public function getDetails()
    {
        echo "Joueur: $this->nom, Date de naissance: $this->dateNaissance, Position: $this->position, Equipe: $this->equipe";
    }


}