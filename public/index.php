<?php

require '../src/TimeTravel.php';

use App\TimeTravel;

$start = '1985-12-31';
$timeTravel = new TimeTravel($start);

$interval = new DateInterval('PT1000000000S');
$date = $timeTravel->findDate($interval, '-');
$timeTravel->end = $date;
echo 'date in past : ' . $timeTravel->end->format('Y-m-d');

echo "<br>";

echo $timeDiff = $timeTravel->getTravelInfo();


echo "<br>";

$jumpInTime = new DateInterval('P1M8D');
$step = new DatePeriod($timeTravel->end, $jumpInTime, $timeTravel->getStart());
$datesToFuture = $timeTravel->backToFutureStepByStep($step);
echo "Dates step by step :";
echo "<br>";
foreach ($datesToFuture as $dateStep) {
    echo $dateStep;
    echo "<br>";
}


