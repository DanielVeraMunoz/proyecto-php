<?php

/*EXERCICI 1*/

// Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

//     Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
//     Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.


echo "~Exercici 1~\n";
echo "\n";

function calculateCost($minutesCall){
    if ($minutesCall < 3){
        $cost = 10;
    }
    else {
        $extraMinutes = $minutesCall - 3;
        $extraCost = $extraMinutes * 5;
        $cost = 10 + $extraCost;
    }
    return $cost;
}

echo calculateCost(6);


/*EXERCICI 2*/

echo "\n" . "\n";
echo "~Exercici 2~\n";
echo "\n";

function calculateSum($p1, $p2, $p3){
    if ($p1 > 9999 || $p1 < 0 || $p2 > 9999 || $p2 < 0 || $p3 > 9999 || $p3 < 0 ){
        throw new Exception("The points could be betewen 0 and 9999");
    }
    else {
    $sum = $p1 + $p2 + $p3;
    return $sum;
    }
}

echo "Sum: ";
echo calculateSum(2999,9998,5455);
echo "\n";

function calculateAverage($p1, $p2, $p3){
    if ($p1 > 9999 || $p1 < 0 || $p2 > 9999 || $p2 < 0 || $p3 > 9999 || $p3 < 0 ){
        throw new Exception("The points could be betewen 0 and 9999");
    }
    else {
    $sum = $p1 + $p2 + $p3;
    $total = $sum / 3;
    return $total;
    }
}

echo "Average: ";
echo calculateAverage(2999,9998,5455);
echo "\n";

//Aquí entendí que puedo usar una función dentro de otra y no repetir el trabajo xD. 

function calculateRanking($p1, $p2, $p3){
    $average = calculateAverage($p1, $p2, $p3);
    if ($average <= 4000){
        $ranking = "Begginner";
    }
    elseif($average < 8000){
        $ranking = "Intermediate";
    }
    else{
        $ranking = "Professional";
    }
    return $ranking;
    }

    echo calculateRanking(2999,9998,5455);
