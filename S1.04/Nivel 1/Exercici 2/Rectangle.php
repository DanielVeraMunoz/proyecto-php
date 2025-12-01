<?php

require_once "Shape.php";

class Rectangle extends Shape {
    
    public function calculateArea(){
        return $this->width * $this->lenght;
    }

}
