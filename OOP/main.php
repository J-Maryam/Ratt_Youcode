<?php

use Classes\Coach;
use Classes\Joueur;
use Classes\Team;

//Ajout de nouveaux coach
$coach1 = new Coach('Oualid', '123 Av Riad', '075-587-8875');
$coach2 = new Coach('Salim', '100 Av Saada', '075-587-0005');

//Ajout de nouveaux equipes
$team1 = new Team('Les Lions', $coach1);
$team2 = new Team('Les Aigles', $coach2);

//Ajout des joueuers dans le team
$joueur1 = new Joueur("Jane Doe", "1990-01-01", "Attaquant", $team1);
$team1->addPlayer($joueur1);

$joueur2 = new Joueur("Joe Doe", "1990-01-01", "Attaquant", $team2);
$team2->addPlayer($joueur2);

