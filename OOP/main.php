<?php
require_once 'Classes/Arbitre.php';
require_once 'Classes/Coach.php';
require_once 'Classes/Event.php';
require_once 'Classes/Joueur.php';
require_once 'Classes/Matchh.php';
require_once 'Classes/Team.php';

use Classes\Arbitre;
use Classes\Coach;
use Classes\Event;
use Classes\Joueur;
use Classes\Matchh;
use Classes\Team;

//Ajout de nouveaux coach
$coach1 = new Coach('Oualid', '123 Av Riad', '075-587-8875');
$coach2 = new Coach('Salim', '100 Av Saada', '075-587-0005');

//Ajout de nouveaux equipes
$team1 = new Team('Team A', $coach1);
$team2 = new Team('Team B', $coach2);

// Afficher les détails des équipes
echo "Liste des équipes :\n";
$team1->getDetails();
$team2->getDetails();

echo "Liste des joueurs :\n";
//Ajout des joueuers dans le team
$joueur1 = new Joueur("Player 1", "1990-01-01", "Attaquant", $team1);
$joueur2 = new Joueur("Player 2", "1990-01-01", "Défenseur", $team2);

// Afficher les détails des joueurs
$joueur1->getDetails();
$joueur2->getDetails();

$arbitre = new Arbitre("Arbitre 1", "456 Elm St", "077-555-5678");
$match = new Matchh($team1, $team2, "2024-07-03", "15:00", $arbitre);

// Afficher les détails du match
$match->getDetails();

$event1 = new Event("But", 23, $joueur1, $match);
$event2 = new Event("Carton Jaune", 15, $joueur2, $match);

// Afficher les détails de l'événement
$event1->getDetails();
$event2->getDetails();