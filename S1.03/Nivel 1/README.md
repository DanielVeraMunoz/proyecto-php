# Actividad PHP – Arrays y Funciones Básicas

Este proyecto incluye varios ejercicios introductorios en PHP centrados en el uso de arrays, funciones y manipulación básica de datos. 

---

## Ejercicio 1 – Mostrar contenido de un array

Se declara un array de números enteros y se muestra su contenido usando `var_dump()`.

---

## Ejercicio 2 – Array indexado: eliminar y reindexar

Se trabaja con un array indexado, muestro por pantalla la medida del Array con `count()`. Después elimino con `unset()` el index 2, y muestro por pantalla el contenido con `var_dump()`.  Después se reindexa con `array_values()`.

---

## Ejercicio 3 – Comprobar si una letra aparece en todas las palabras

Se crea la función `letterCounter($words, $char)`, en ella creo una variable que es wordLowercase donde guardo la palabra en minúscula para normalizarla, hago lo mismo con charLowercase. Una vez las tengo normalizadas, usando la función mágica `strpos()` hago que busque el caracter (indicado en el segundo atributo) en la palabra en miniscula (primer atributo) y lo guardo en la nueva variable `$position.` Si no la encuentra guardará 0, lo que es = a `false`, entonces genero un condicional donde, si es `false` me devuelve `false`por consola. Y si tiene alguna posición, o sea es true, me devolverá `true`por consola. Luego he probado la function y funciona correctamente. 

---

## Ejercicio 4 – Creando un array asociativo / diccionario.

Creo un Array Asociativo, donde en lugar de el índice en números es un índice con palabras, en este caso nombre, apellido, email y comida favorita. Después muestro con `var_dump`el interior de mi array para ver que todo esté bien.