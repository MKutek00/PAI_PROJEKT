<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');

Router::get('find_match', 'FindMatchController');

Router::get('lower_leagues', 'LeagueController');
Router::get('news', 'NewsController');

Router::post('register', 'SecurityController');
Router::post('login', 'SecurityController');
Router::post('add_news', 'NewsController');

Router::get('league_table', 'TableController');
Router::get('league_schedule', 'ScheduleController');

Router::get('get_match', 'FindMatchController');

Router::get('logout','SecurityController');

Router::run($path);