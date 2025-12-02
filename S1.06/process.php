<?php

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
echo "Email: " . $email;


//funciona! :)


//Ejercicio 2

echo "<strong>Constante mágica __FILE__:</strong>" . __FILE__;
