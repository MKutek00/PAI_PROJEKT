<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index(){
        $this->render('news');
    }

    public function news(){
        $this->render('news');
    }

    public function find_match(){
        $this->render('find_match');
    }

    public function games_near_you(){
        $this->render('games_near_you');
    }

    public function leauge_table(){
        $this->render('leauge_table');
    }

    public function lower_leauges(){
        $this->render('lower_leauges');
    }

    public function schedule(){
        $this->render('schedule');
    }
}