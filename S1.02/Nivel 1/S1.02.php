<?php

/* EXERCICI 1 */

echo "~Exercici 1~\n";
echo "\n";

$my_integer = 17;
$my_double = 0.3;
$my_string = "Pichi";
$my_boolean = true;

echo "Integer: " . $my_integer . "\n";
echo "Double: " . $my_double . "\n";
echo "String: " . $my_string . "\n";
echo "Boolean: " . $my_boolean . "\n";

define("MY_CONSTANT", "Daniel Vera");

echo "String constant: " . MY_CONSTANT . "\n";

/* EXERCICI 2 */

echo "\n";
echo "~Exercici 2~\n";
echo "\n";

echo "· Variable String: \n";
$hello_world = "Hello, World!";
echo $hello_world . "\n" . "\n";

echo "· Variable majúscules: \n";
$hello_world_upper = strtoupper($hello_world);
echo $hello_world_upper . "\n" . "\n";

echo "· Longitud variable: \n";
echo strlen($hello_world_upper) . "\n" . "\n";

echo "· Ordre invers: \n";
$hello_world_reverse = strrev($hello_world_upper);
echo $hello_world_reverse . "\n" . "\n";

echo "· Concatenació: \n";
$curs_php = "Aquest ès el curs de PHP";
echo $curs_php . $hello_world_reverse;
