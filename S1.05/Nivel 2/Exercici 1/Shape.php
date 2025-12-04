<?php

abstract class Shape{
    protected $width;
    protected $length;

    public function __construct($width, $length){
        $this->width = $width;
        $this->lenght = $length;
    }

    abstract public function calculateArea(): float;
}