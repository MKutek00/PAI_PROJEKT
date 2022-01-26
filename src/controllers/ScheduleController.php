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

    public function schedule(){
        $schedule = $this->scheduleRepository->getSchedule(10); //TODO NA STAŁE WARTOŚĆ USTAWIONA
        return $this->render('schedule', [
            'schedule' => $schedule
        ]);

    }
}
