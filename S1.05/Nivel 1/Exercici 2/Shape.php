<?php

/* EXERCICI 2 */

echo "\n";
echo "~Exercici 1~\n";
echo "\n";

abstract class Shape{
    protected $width;
    protected $lenght;

   
   public function __construct($width, $lenght)
   {
    $this->width = $width;
    $this->lenght = $lenght;
   }

    abstract public function calculateArea();
}