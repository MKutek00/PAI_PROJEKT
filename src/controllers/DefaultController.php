<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index(){
        $this->render('login');
    }

    public function find_match(){
        $this->render('find_match');
    }


    public function leauge_table(){
        $this->render('leauge_table');
    }

    public function schedule(){
        $this->render('schedule');
    }

}