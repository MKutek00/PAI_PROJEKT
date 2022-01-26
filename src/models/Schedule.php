<?php

class Schedule{
    private $team_one;
    private $team_two;
    private $date;

    public function __construct(string $team_one,string $team_two, string $date)
    {
        $this->team_one = $team_one;
        $this->team_two = $team_two;
        $this->date = $date;
    }

    public function getTeamOne()
    {
        return $this->team_one;
    }

    public function setTeamOne($team_one): void
    {
        $this->team_one = $team_one;
    }

    public function getTeamTwo()
    {
        return $this->team_two;
    }

    public function setTeamTwo($team_two): void
    {
        $this->team_two = $team_two;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): void
    {
        $this->date = $date;
    }

}