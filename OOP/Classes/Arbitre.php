<?php

namespace Classes;

class Arbitre extends Person
{
    public function __construct($nom, $adresse, $tel)
    {
        parent::__construct($nom, $adresse, $tel);
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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getDetails()
    {
        echo "L'Arbitre: $this->nom, Adresse est: $this->adresse, Tel: $this->tel";
    }

}