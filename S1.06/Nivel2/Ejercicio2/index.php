<?php

require_once "Car.php";
require_once "Turbo.php";

$car1 = new Car("Mercedes", "5950HDK", "Diesel", 180);

echo $car1;
echo "\n";

$car1->boost();