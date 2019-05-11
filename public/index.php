<?php

//require 'vendor/autoload.php';
require '../src/TimeTravel.php';

use App\TimeTravel;

$start = '1985-12-31';
$end = '1990-12-31';
$interval = new DateInterval('PT1000000S');


$timeTravel = new TimeTravel($start);


$date = $timeTravel->findDate($interval);

echo 'date in past : ' . $date->format('Y-m-d');




