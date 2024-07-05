<?php

namespace Classes;

class Match implements MatchDetails
{
    private $equipe1, $equipe2, $date, $heure, $arbitre, $resultat;

    public function __construct($equipe1, $equipe2, $date, $heure, $arbitre, $resultat)
    {
        $this->equipe1 = $equipe1;
        $this->equipe2 = $equipe2;
        $this->date = $date;
        $this->heure = $heure;
        $this->arbitre = $arbitre;
        $this->resultat = $resultat;
    }

    /**
     * @return mixed
     */
    public function getEquipe1()
    {
        return $this->equipe1;
    }

    /**
     * @return mixed
     */
    public function getEquipe2()
    {
        return $this->equipe2;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @return mixed
     */
    public function getArbitre()
    {
        return $this->arbitre;
    }

    /**
     * @return mixed
     */
    public function getResultat()
    {
        return $this->resultat;
    }


    /**
     * @param mixed $equipe1
     */
    public function setEquipe1($equipe1)
    {
        $this->equipe1 = $equipe1;
    }

    /**
     * @param mixed $equipe2
     */
    public function setEquipe2($equipe2)
    {
        $this->equipe2 = $equipe2;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    /**
     * @param mixed $arbitre
     */
    public function setArbitre($arbitre)
    {
        $this->arbitre = $arbitre;
    }

    /**
     * @param mixed $resultat
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;
    }

    public function getDetails()
    {
        echo "Equipe1: $this->equipe1, Equipe2: $this->equipe2, Date: $this->date, Heure: $this->heure, Arbitre: $this->arbitre, Resultat: $this->resultat";
    }


}