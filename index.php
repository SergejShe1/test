<?php

use Container\Room;
use Container\RoomComposition;
use Container\Student;
use Container\Sddf;
use Shape\Circle;
use Shape\Square;
use Shape\Triangle;


require_once 'vendor/autoload.php';

error_reporting(E_ALL);

$circle = new Circle(5);
echo $circle->getName();
echo $circle->getSquare();

echo '<br>';

$triangle = new Triangle(5, 4, 3);
echo $triangle->getName();
echo $triangle->getSquare();









//$square = new Square(5);


//$s = new Sddf($square);


//echo $s->sd();



$s1 = new Student();

$s2 = new Student();

$room1 = new Room();
$room2 = new RoomComposition($s1, $s2);

$room1->addStudent($s1)->addStudent($s2);

