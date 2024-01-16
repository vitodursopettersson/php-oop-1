<?php
require_once __DIR__ . '/Models/Movie.php';

$movies = [];

$the_game_nessuna_regola = new Movie('The Game Nessuna Regola', 1997, 128, ['Thriller', 'Drammatico'], 'img/thegame.jpg', 'La vita di un consulente finanziario precipita nel pericolo e nella paranoia dopo lo strano regalo di compleanno del fratello: la partecipazione a un gioco misterioso.');
$the_game_nessuna_regola->duration_hour_minutes = Movie::getRunningTimeHourMinutes(128);
$movies[] = $the_game_nessuna_regola;

$the_prestige = new Movie('The Prestige', 2006, 130, ['Thriller', 'Drammatico', 'Spiazzante'], 'img/theprestige.webp', 'La gara tra due giovani maghi rivali su chi sia il migliore si gioca a suon di giochi di prestigio sempre più rischiosi, che finiscono per diventare mortali.');
$the_prestige->duration_hour_minutes = Movie::getRunningTimeHourMinutes(130);
$movies[] = $the_prestige;

$la_grande_scomessa = new Movie('La grande scomessa', 2015, 160, ['Thriller', 'Commedia'], 'img/gscom.jpg', 'Un gruppo di astuti arrivisti riesce a prevedere il tracollo economico americano e a fare una fortuna scommettendo contro le banche.');
$la_grande_scomessa->duration_hour_minutes = Movie::getRunningTimeHourMinutes(160);
$movies[] = $la_grande_scomessa;
