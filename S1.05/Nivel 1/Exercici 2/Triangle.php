<?php

declare(strict_types=1);
require_once "Shape.php";


class Triangle extends Shape{

    public function calculateArea(): float{
        return ($this->width * $this->length) / 2;
    }
}