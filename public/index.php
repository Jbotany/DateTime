<?php

//require 'vendor/autoload.php';
require '../src/TimeTravel.php';

use App\TimeTravel;

$start = '1985-12-31';
$end = '1990-12-31';

$timeTravel = new TimeTravel($start, $end);

echo $timeTravel->getTravelInfo()->format('%Y années %m mois %d jours');
die();
$timeTravel->interval = '1000000';

echo $timeTravel->getTravelInfo()->format('%Y années %m mois %d jours');


