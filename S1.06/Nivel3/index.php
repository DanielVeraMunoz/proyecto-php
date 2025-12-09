<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

echo "Today is: " . Carbon::now();

$date = Carbon::now();

echo PHP_EOL;

$birthDayDate = Carbon::create(1991,6,14);

echo $birthDayDate;


