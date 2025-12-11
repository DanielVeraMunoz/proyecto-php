
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

require_once "user.php";
require_once "exceptions.php";

$userName = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

//Funciones de validación:

function validateUserName(string $userName){
    if (trim($userName) === ''){
        throw new UserNameException("Name shouldn't be empty.");
    }
    if (is_numeric($userName)){
        throw new UserNameException("Name should be only letters.");
    }
    return true;
}

function validatePassword(string $password){
    if (trim($password) === ''){
        throw new PasswordException("Password shouldn't be empty.");
    }
    if (strlen($password) < 6){
        throw new PasswordException("Password should be longer than 6 characters.");
    }
    return true;
}

function validateEmail(string $email){
    if(trim($email) === ''){
        throw new EmailException("Email shouldn't be empty.");
    }
    return true;
}

//Update: Aquí tenia la validación también del password pero el GitGuardian me asustó me dijo que quedaría guardado en historial o algo así que no entendí muy bien y decidí eliminar el guardar la SESSION del password... aunque no he llegado a entender si tiene que ver con esto... profundizaré en esta cuestión pero no me ha vuelto a saltar... Al igual que eliminé en process.php el mostrar la contraseña así en texto plano sin encriptarla al usuario. Directamente no muestro al usuario el pass y solo muestro el usuario y mail. 

try {
    validateUserName($userName);
    validateEmail($email);

    $_SESSION['username'] = $userName;
    $_SESSION['email'] = $email;

    $user = new User($userName, $password, $email);

    echo "<div class='user-info'>";
    echo "<h2>Registro correcto. Bienvenidx!</h2>";
    echo $user;
    echo "</div>";

    } catch (UserNameException $e){
        echo "<div class='user-info'>";
        echo "<h2>ERROR</h2>";
        echo $e->getMessage();
        echo "</div>";
    } catch (EmailException $e){
        echo "<div class='user-info'>";
        echo "<h2>ERROR</h2>";
        echo $e->getMessage();
        echo "</div>";
    }
    ?>
    </body>
    </html>


