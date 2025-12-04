<?php

declare(strict_types=1);

abstract class Animal {
    private string $name;

    public function __construct($name){
        $this->name = $name;
    }

    abstract public function talk(): string;

    public function getName(): string{
        return $this->name;
    }
    
}