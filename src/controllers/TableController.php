<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Table.php';
require_once __DIR__.'/../repository/ScoreTableRepository.php';

class TableController extends AppController {

    private $message = [];
    private $scoreTableRepository;

    public function __construct()
    {
        parent::__construct();
        $this->scoreTableRepository = new ScoreTableRepository();
    }

    public function leauge_table(){

        $tables = $this->scoreTableRepository->getScoreTable(11); //TODO how to change this from static to generated
                                                                    //TODO when pressing link
            return $this->render('leauge_table', [
                'table' => $tables
            ]);

    }
}
