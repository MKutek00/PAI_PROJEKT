<?php
require_once 'AppController.php';
require_once __DIR__ .'/../models/Schedule.php';
require_once __DIR__.'/../repository/FindMatchRepository.php';

class FindMatchController extends AppController{

    private $message = [];
    private $findMatchRepository;

    public function __construct()
    {
        parent::__construct();
        $this->findMatchRepository = new FindMatchRepository();
    }


    public function find_match(){
        $location = $_POST['location'];
        $range = $_POST['zakres'];

//        // TODO zmień wartość location na współrzędne x i y
//        $this->scheduleRepository->find_match(49.982338,19.24755,30);
//        $this->message[]=$location.$range; //49.982338,19.24755,30
        $matches = $this->findMatchRepository->findMatch(49.982338,19.24755,30);
        return $this->render('find_match', ['messages' => $this->message,
                                                    'matches' => $matches]);

    }
}