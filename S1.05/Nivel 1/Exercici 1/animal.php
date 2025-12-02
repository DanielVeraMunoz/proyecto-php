<?php

abstract class Animal {
    private string $name;

    public function __construct($name)
    {
    $this->name = $name;
    }

    abstract function talk();

    
    public function getName(){
        return $this->name;
    }
    
}