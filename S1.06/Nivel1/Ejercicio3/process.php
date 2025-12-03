
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario procesado</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>


<?php

session_start();

require_once "User.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['email'] = $email;


$user = new User($username, $password, $email);


?>

<div class="user-info">
    <?php echo "Bienvenidx!<br>Estos son tus datos introducidos:" . "<br>" . "<br>"; ?>
    <?php echo $user; ?>
</div>
