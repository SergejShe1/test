<?php


use Container\ShapeContainer;
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

echo '<br>';

//////////////////////////////////////////////////////

$shape = new Triangle(3,4,5);
$shape2 = new Square(5);

$container = new ShapeContainer($shape);

echo $container->addShape($shape);
















/*
$shape = new ShapeContainer(Triangle::class); //что эоо аа дичь????
echo $shape->addShape();
*/



















echo '<br>';
















//$square = new Square(5);


//$s = new Sddf($square);


//echo $s->sd();


