<?php

require_once "Turbo.php";

class Car{

    use Turbo;

    private string $brand;
    private string $registration;
    private string $fuelType;
    private int $maxSpeed;


public function __construct(string $brand, string $registration, string $fuelType, int $maxSpeed)
{
    $this->brand=$brand;
    $this->registration=$registration;
    $this->fuelType=$fuelType;
    $this->maxSpeed=$maxSpeed;
}

public function __toString(): string {
    return "Brand: " . $this->brand . "\n" . 
    "Registration: " . $this->registration . "\n" . 
    "Fuel Type: " . $this->fuelType . "\n" . 
    "Max Speed:" . $this->maxSpeed . "km/h";
    }
    
}