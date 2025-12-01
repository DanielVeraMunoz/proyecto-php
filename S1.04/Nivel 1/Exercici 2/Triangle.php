<?php

require_once "Shape.php";

class Triangle extends Shape{

    public function CalculateArea(){
        return ($this->width * $this->lenght) / 2;
    }
}