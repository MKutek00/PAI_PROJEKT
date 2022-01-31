<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('index', 'DefaultController');
Router::get('find_match', 'DefaultController');
Router::get('games_near_you', 'DefaultController');

Router::post('find_match', 'FindMatchController');

Router::get('schedule', 'ScheduleController');
Router::get('leauge_table', 'TableController'); //todo to to
Router::get('lower_leagues', 'LeagueController');
Router::get('news', 'NewsController');

Router::post('register', 'SecurityController');
Router::post('login', 'SecurityController');
Router::post('add_news', 'NewsController');

Router::get('select_league', 'LeagueController');
Router::post('search', 'FindMatchController');



Router::run($path);