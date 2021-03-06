<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Schedule.php';
require_once __DIR__.'/../repository/ScheduleRepository.php';

class ScheduleController extends AppController {

    private $message = [];
    private $scheduleRepository;

    public function __construct()
    {
        parent::__construct();
        $this->scheduleRepository = new ScheduleRepository();
    }

    public function league_schedule()
    {
        session_start();
        if(!isset($_SESSION['id'])){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }

        $id = $_GET["id"];

        $schedule = $this->scheduleRepository->getSchedule($id);
        return $this->render('schedule', ['schedule' => $schedule]);
    }
}
