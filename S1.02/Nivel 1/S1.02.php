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
echo $curs_php . $hello_world_reverse . "\n";

/* EXERCICI 3 */

echo "\n";
echo "~Exercici 3~\n";
echo "\n";

$x = 2;
$y = 3;

$n = 2.3;
$m = 1.7;

echo ($x * $y) . "\n";
echo ($x + $y) . "\n";
echo ($x - $y) . "\n";
echo ($x % $y) . "\n" . "\n";

echo ($n * $m) . "\n";
echo ($n + $m) . "\n";
echo ($n - $m) . "\n";
echo ($n % $m) . "\n" . "\n";

echo ($x * 2) . "\n";
echo ($y * 2) . "\n";
echo ($n * 2) . "\n";
echo ($m * 2) . "\n" . "\n";

echo ($x + $y + $n + $m) . "\n";
echo ($x * $y * $n * $m) . "\n" . "\n";

echo "· Función operador: \n";

function operate($n1, $n2, $operator){
    switch ($operator){
        case "+":
            return ($n1 + $n2);
        case "-":
            return ($n1 - $n2);       
        case "*":
            return ($n1 * $n2);
        case "/":
            if ($n2 == 0) return "Error: division by 0";
            return ($n1 / $n2);   
        default:
            return "Unknown operator";    
    }

}

echo "Example: " . "\n";
echo operate (23, 2, "/");
echo "\n";

/* EXERCICI 4 */

echo "\n";
echo "~Exercici 4~\n";
echo "\n";

function counter($num_limit = 10, $increase = 1){
    for($i = 0; $i <= $num_limit; $i += $increase) {
        echo $i . "\n";
    }
} 

echo "Default:" . "\n";
counter();


/* EXERCICI 5 */

echo "\n";
echo "~Exercici 5~\n";
echo "\n";

function gradeDeterminer($mark){
    if ($mark > 100){
        throw new Exception("Nota incorrecte.");
    }
    if ($mark >= 60 && $mark <= 100){
        $grade = "Primera divisó";
    }
    if ($mark >= 45 && $mark <= 59){
        $grade = "Segonda divisió";
    }
    if ($mark >= 33 && $mark >= 44){
        $grade = "Tercera divisió";
    }
    if ($mark < 33){
        $grade = "Reprovat";
    }
    return $grade;
}

echo "El grau del estudiant es: ";
echo gradeDeterminer(15);
echo "\n";


/* EXERCICI 6 */

echo "\n";
echo "~Exercici 6~\n";
echo "\n";

function isBitten(){
    $boolean = rand(0, 1);
    if($boolean == 0){
        $bitten = "FALSE";
    }
    if($boolean == 1){
        $bitten = "TRUE";
    }
    return $bitten;

}

echo isBitten();
