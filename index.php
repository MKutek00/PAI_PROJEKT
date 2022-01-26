<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('index', 'DefaultController');
Router::get('find_match', 'DefaultController');
Router::get('games_near_you', 'DefaultController');
Router::get('schedule', 'DefaultController');

Router::get('leauge_table', 'TableController');
Router::get('lower_leagues', 'LeagueController');
Router::get('news', 'NewsController');
Router::post('login', 'SecurityController');
Router::post('add_news', 'NewsController');


Router::run($path);