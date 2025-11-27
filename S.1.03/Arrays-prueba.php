<?php

/* ARRAYS */

$cosas = ["corazón", "cara", "sol"];

echo $cosas[0];
echo $cosas[1];
echo $cosas[2];

echo "\n" . "\n";

/* FUNCIONES ARRAYS */

/* añadir al último */

array_push($cosas, "fresa");

/* mostrar contenido Array */

var_dump($cosas);

echo "\n";

/* eliminar último */

array_pop($cosas);

/* eliminar por index */

unset($cosas[2]);

var_dump($cosas);

echo "\n";

echo count($cosas);

echo "\n";

echo join ("· ", $cosas);

echo "\n";
