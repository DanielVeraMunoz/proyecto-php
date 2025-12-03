<?php

//Ejercicio 1

//Esto es para poder usar el array superglobal de $_SESSION que aparece mas adelante. 

session_start();

//Aqui uso un Array Superglobal, que es el POST. Está linkado con el 'name' del input que se escribe en el form.html. 

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

//Ahora guardo en la sesión para dejarla iniciada del usuario concreto que ingresó sus datos etc...

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['email'] = $email;


//Aquí hago un echo para que cuando le doy a Enviar y en el explorador aparezco en este archivo (process.php) muestre algo en pantalla, y pueda comprobar que se envió bien. 

echo "Username: " . $username . "<br>";
echo "Password: " . $password . "<br>";
echo "Email: " . $email . "<br>";

echo "<br>";

//funciona! :)


//Ejercicio 2

//pruebo un poco las constantes mágicas para ir entendiendolas. 

echo "<strong>Constante mágica __FILE__:</strong>";
echo "<br>";
echo __FILE__;
echo "<br>";

echo "<strong>Constante mágica __DIR__:</strong>";
echo "<br>";
echo __DIR__;
echo "<br>";

echo "<strong>Constante mágica __LINE__:</strong>";
echo "<br>";
echo __LINE__;
echo "<br>";


//Para entender la constante mágica FUNCTION creo una función y luego muestro el nombre de la función donde se encuentra __FUNCTION__.

function playWithMagicConstant(){
    return __FUNCTION__;
}

echo "<strong>Constante mágica __FUNCTION__:</strong>";
echo "<br>";
echo playWithMagicConstant();

//Por lo comprobado y leido veo que sirven de manera practica para localizar errores, entre otras cosas, entiendo que mas adelante que las usemos en programas realistas se entenderá mejor. 