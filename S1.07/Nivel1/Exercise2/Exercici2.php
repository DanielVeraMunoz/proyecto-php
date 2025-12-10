<?php

$name = 4324;
$passowrd = "jdasjd";
$email = "holi@caracoli.com";


function validateName($name){
    if ( empty($name) ) {
        throw new Exception("Name shouldn't be empty.");
    }
    if (!is_string($name)){
        throw new Exception("Name should be only letters.");
    }
    return true;
}

function validatePassword ($password){
    if ( empty($password)){
        throw new Exception("Password shouldn't be empty.");
    }
}

function validateEmail ($email){
    if (empty($email)){
        throw new Exception("Email shouldn't be empty.");
    }
}

try{
    validateName($name);
    validatePassword($password);
    validateEmail($email);
    echo "Register successfully!";
} catch (Exception $error){
    echo "Im sorry. " . $error->getMessage();
}