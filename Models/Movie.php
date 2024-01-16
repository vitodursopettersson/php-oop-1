<?php

class Movie
{
    public $name;
    public $year;
    public $duration_minutes;
    public $duration_hour_minutes;
    public $category;
    public $poster;
    public $info;

    public function __construct($_name, $_year, $_duration_minutes, array $_category, $_poster, $_info)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->duration_minutes = $_duration_minutes;
        $this->category = $_category;
        $this->poster = $_poster;
        $this->info = $_info;
    }

    static function getRunningTimeHourMinutes($minutes)
    {
        $hour = floor($minutes / 60);
        $minutes_remaining = $minutes % 60;

        return ["hour" => $hour, "minutes" => $minutes_remaining];
    }
};
