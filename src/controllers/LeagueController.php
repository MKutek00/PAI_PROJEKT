<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/League.php';
require_once __DIR__ .'/../repository/LeagueRepository.php';

class LeagueController extends AppController{

    private $message = [];
    private $leaguesRepository;

    public function __construct()
    {
        parent::__construct();
        $this->leaguesRepository = new LeagueRepository();
    }

    public function lower_leagues(){
        $leagues = $this->leaguesRepository->getLeagues();
        $this->render('lower_leagues', ['leagues' => $leagues]);
    }

}