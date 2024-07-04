<?php

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

    public function getDetails()
    {
        echo "Le type d'event: $this->type, Minute: $this->minute, Joueur: $this->joueur, Match: $this->match";
    }

}