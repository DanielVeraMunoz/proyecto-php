<?php

declare(strict_types=1);
require_once "animal.php";

class Dog extends Animal{

    public function talk(): string{
        return "guau! guau! guau!";
    } 
}