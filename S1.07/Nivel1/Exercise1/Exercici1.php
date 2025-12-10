<?php


$num1 = 12;
$num2 = 0;

function divideNumber(float $num1, float $num2): float {
    if ($num2 == 0){
        throw new Exception("You can't divide by 0");
    }
    return $num1 / $num2;
}

try {
    $result = divideNumber($num1, $num2);
    echo $result;
} catch (Exception $e) {
    echo $e->getMessage();
}
