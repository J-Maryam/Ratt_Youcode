<?php

namespace Classes;
class Event
{
    private $type, $minute, $joueur, $match;

    public function __construct($type, $minute, $joueur, $match)
    {
        $this->type = $type;
        $this->minute = $minute;
        $this->joueur = $joueur;
        $this->match = $match;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @return mixed
     */
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * @return mixed
     */
    public function getMatch()
    {
        return $this->match;
    }


    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $minute
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
    }

    /**
     * @param mixed $joueur
     */
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;
    }

    /**
     * @param mixed $match
     */
    public function setMatch($match)
    {
        $this->match = $match;
    }


    public function getDetails()
    {
        echo "Le type d'event: $this->type, Minute: $this->minute, Joueur: $this->joueur, Match: $this->match";
    }

}