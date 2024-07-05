<?php

namespace Classes;
abstract class Person
{
    protected $nom, $adresse, $tel;

    public function __construct($nom, $adresse, $tel)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->tel = $tel;
    }

    abstract public function getDetails();

}