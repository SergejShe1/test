<?php


use Container\ShapeContainer;
use Shape\Circle;
use Shape\Square;
use Shape\Triangle;
use Shape\Rectangle;


require_once 'vendor/autoload.php';

error_reporting(E_ALL);

$circle = new Circle(5);
echo $circle->getName();
echo $circle->getSquare();
echo $circle->getPerimeter();

echo '<br>';

$triangle = new Triangle(5, 4, 3);
echo $triangle->getName();
echo $triangle->getSquare();

echo '<br>';

////////////////////////////////////////////////////////////////

$shape1 = new Triangle(3, 4, 5);
$shape2 = new Square(5);
$shape3 = new Rectangle(5, 7);
$shape4 = new Circle(5);

$container = new ShapeContainer();

$container->addShape($shape1);
$container->addShape($shape2);
$container->addShape($shape3);
$container->addShape($shape4);


echo $container->getPerimeter();
echo '<br>';
echo $container->getSquare();







