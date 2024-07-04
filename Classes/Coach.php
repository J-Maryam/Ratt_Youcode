<?php

class Coach extends Person
{
    public function __construct($nom, $adresse, $tel)
    {
        parent::__construct($nom, $adresse, $tel);
    }

    public function getDetails()
    {
        echo "Le Coach: $this->nom, son adresse est: $this->adresse, son tel: $this->tel";
    }

}