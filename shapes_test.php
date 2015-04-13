<?php

require_once 'rectangle.php';
require_once 'square.php';

$rectangle = new Rectangle(8.5, 11);
$area = $rectangle->area();
echo "The area of this shape is $area" . PHP_EOL;

$square = new Square(4, 4);
echo "The area of a 4 inch square is " . $square->area() . " inches" . PHP_EOL;
echo "The perimeter of this square is " . $square->perimeter() . PHP_EOL;

$square2 = new Square(3, 3);
echo "The area of a 3 inch square is " . $square2->area() . " inches" . PHP_EOL;
echo "The perimeter of this square is " . $square2->perimeter() . PHP_EOL;
