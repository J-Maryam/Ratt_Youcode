<?php

use Classes\Arbitre;
use Classes\Coach;
use Classes\Event;
use Classes\Joueur;
use Classes\Match;
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

$arbitre = new Arbitre("Alice Smith", "456 Elm St", "077-555-5678");
$match = new Match($team1, $team2, "2024-07-03", "15:00", $arbitre);

$event1 = new Event("But", 23, $joueur1, $match);
$event2 = new Event("Carton Jaune", 15, $joueur2, $match);

$match->addEvent($event1);
$match->addEvent($event2);

// Afficher les détails du match
echo $match->getDetails();


