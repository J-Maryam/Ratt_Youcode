<?php

class Arbitre extends Person
{
    public function __construct($nom, $adresse, $tel)
    {
        parent::__construct($nom, $adresse, $tel);
    }

    public function getDetails()
    {
        echo "L'Arbitre: $this->nom, Adresse est: $this->adresse, Tel: $this->tel";
    }

}