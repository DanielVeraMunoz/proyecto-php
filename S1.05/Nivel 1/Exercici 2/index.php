<?php

declare(strict_types=1);
require_once "Triangle.php";
require_once "Rectangle.php";


$triangle1 = new Triangle(4,3);
$rectangle1 = new Rectangle(6,7);

echo "Area of triangle1 is : " . $triangle1->calculateArea();
echo "\n";
echo "Area of rectangle1 is: " . $rectangle1->calculateArea();