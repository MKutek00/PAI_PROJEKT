<?php

class Schedule{
    private $team_one;
    private $team_two;
    private $league_name;
    private $date;
    private $dstc;

    public function __construct(string $team_one,string $team_two, string $league_name, string $date, string $dstc)
    {
        $this->team_one = $team_one;
        $this->team_two = $team_two;
        $this->date = $date;
        $this->league_name = $league_name;
        $this->dstc = $dstc;


    }

    public function getDstc()
    {
        return $this->dstc;
    }

    public function setDstc($dstc): void
    {
        $this->dstc = $dstc;
    }

    public function getLeagueName(): string
    {
        return $this->league_name;
    }

    public function setLeagueName(string $league_name): void
    {
        $this->league_name = $league_name;
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