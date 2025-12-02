<?php

require_once "animal.php";
require_once "dog.php";
require_once "cat.php";

$cat1 = new Cat("Dani");
$dog1 = new Dog("Andrés");


echo "El perro " . $dog1->getName() . " hace: " . $dog1->talk();
echo "\n";
echo "El gato " . $cat1->getName() . " hace: " . $cat1->talk();
