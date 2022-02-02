<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/League.php';
require_once __DIR__ .'/../repository/LeagueRepository.php';
require_once __DIR__ .'/../repository/ScoreTableRepository.php';


class LeagueController extends AppController{

    private $message = [];
    private $leaguesRepository;
    private $tableRepository;

    public function __construct()
    {
        parent::__construct();
        $this->leaguesRepository = new LeagueRepository();
        $this->tableRepository = new ScoreTableRepository();

    }

    public function lower_leagues(){
        session_start();
        if(!isset($_SESSION['id'])){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }
        $_SESSION['last'] = $_SESSION['current'];
        $_SESSION['current'] = $_SERVER['HTTP_REFERER'];

        $leagues = $this->leaguesRepository->getLeagues();
        $this->render('lower_leagues', ['leagues' => $leagues]);
    }


}