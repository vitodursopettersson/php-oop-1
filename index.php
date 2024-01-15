<?php
class Movie
{
    public $name;
    public $year;
    public $running_time_minutes;
    public $running_time_hour_minutes;
    public $info;
    public $category;

    public function __construct($_name, $_year, $_running_time_minutes, $_info)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->running_time_minutes = $_running_time_minutes;
        $this->info = $_info;
    }

    public function getRunningTimeHourMinutes($minutes)
    {
        $hour = floor($minutes / 60);
        $minutes_remaining = $minutes % 60;

        return ["hour" => $hour, "minutes" => $minutes_remaining];
    }
};

$the_game_nessuna_regola = new Movie('The Game Nessuna Regola', '1997', '128', 'La vita di un consulente finanziario precipita nel pericolo e nella paranoia dopo lo strano regalo di compleanno del fratello: la partecipazione a un gioco misterioso.');
$the_game_nessuna_regola->$category = ['Thriller', 'Drammatico', 'Premiato'];

$the_game_nessuna_regola->running_time_hour_minutes = $the_game_nessuna_regola->getRunningTimeHourMinutes(128);

echo $the_game_nessuna_regola->name;
echo "<br>";
echo $the_game_nessuna_regola->year;
echo "<br>";
echo $the_game_nessuna_regola->running_time_minutes;
echo "<br>";
var_dump($the_game_nessuna_regola->running_time_hour_minutes);
echo "<br>";
var_dump($the_game_nessuna_regola->$category);
echo "<br>";
echo $the_game_nessuna_regola->info;
