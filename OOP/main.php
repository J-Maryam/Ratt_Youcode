<?php

use Classes\Coach;
use Classes\Team;

//Ajout de nouveaux coach
$coach1 = new Coach('Oualid', '123 Av Riad', '075-587-8875');
$coach2 = new Coach('Salim', '100 Av Saada', '075-587-0005');

//Ajout de nouveaux equipes
$team1 = new Team('Les Lions', $coach1);
$team2 = new Team('Les Aigles', $coach2);

