<?php

/* EXERCICI 1*/

/*Mostrar contenido array*/

echo "~Exercici 1~\n";
echo "\n";

$integers = [13, 10, 5, 2, 99];

var_dump($integers);

/* EXERCICI 2 */

/* Array Indexado, eliminar y reorganizar index. */

echo "\n";
echo "~Exercici 2~\n";
echo "\n";

$arrayIndex = ["Cuchi", "Mochi", "Pichi", "Rochi", "Corcho", "Mucho"];

echo "Lenght array: " . count($arrayIndex) . "\n";

unset($arrayIndex[2]);

var_dump($arrayIndex);

$arrayIndex = array_values($arrayIndex);

var_dump($arrayIndex);

/* EXERCICI 3 */

/* Función que comprueba si hay una letra en las palabras de un array */

echo "\n";
echo "~Exercici 3~\n";
echo "\n";

function letterCounter($words, $char){
    foreach ($words as $word){
        $wordLowercase = strtolower($word);
        $charLowercase = strtolower($char);
        
        $position = strpos($wordLowercase, $charLowercase);
            
        if($position === false){
            echo "false";
            return;
            }
        
        }
        
        return "true";
    }

$arrayForLetterCounter = ["Hola", "Adios", "Buenas"];

echo letterCounter($arrayForLetterCounter, "a");
echo "\n";

/* EXERCICI 4 */

/* Array asociativo = diccionario */

echo "\n";
echo "~Exercici 4~\n";
echo "\n";

$arrayAsociativo = ["name" => "Daniel", "surname" => "Vera", "email" => "dani.vmg91@gmail.com", "favoriteFood" => "sushi"];

var_dump($arrayAsociativo);