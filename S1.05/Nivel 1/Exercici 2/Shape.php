<?php

declare(strict_types=1);

abstract class Shape{
    protected float $width;
    protected float $length;

    public function __construct($width, $length){
        $this->width = $width;
        $this->lenght = $length;
    }

    abstract public function calculateArea(): float;
}