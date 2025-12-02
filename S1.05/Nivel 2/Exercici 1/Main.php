<?php

require_once "Triangle.php";
require_once "Rectangle.php";
require_once "Circle.php";

$triangle1 = new Triangle(4,3);
$rectangle1 = new Rectangle(6,7);
$circle1 = new Circle(45);

echo "Area of triangle1 is : " . $triangle1->calculateArea();

echo "\n";

echo "Area of rectangle1 is: " . $rectangle1->calculateArea();

echo "\n";

echo "Area of circle1 is: " . $circle1->calculateArea();
