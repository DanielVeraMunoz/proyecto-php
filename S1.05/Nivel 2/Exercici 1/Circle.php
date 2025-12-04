<?php

require_once "Shape.php";

class Circle extends Shape{
    protected float $radio; 

    public function __construct($radio){
        return $this->radio = $radio;
    }

    function calculateArea(): float{
        return ($this->radio ** 2) * 3.1415;
    }
}