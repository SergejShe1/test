<?php


use Game\Army;
use Game\Shooter;
use Game\Sniper;
use Game\Panzer;
use Game\Aircraft;
use Game\Helicopter;
use Game\Gunner;
use Game\Paratrooper;


require_once 'vendor/autoload.php';

error_reporting(E_ALL);


$sniper = new Sniper();
$shooter = new Shooter();
$helicopter = new Helicopter();
$paratrooper = new Paratrooper();
$panzer = new Panzer();
$aircraft = new Aircraft();
$gunner = new Gunner();

/////////////////////////////////////////

$azov = new Army('Азов');
$vzvod1 = new Army('Первый взвод');

$azov->addUnit($helicopter);
$azov->addUnit($helicopter);
$azov->addUnit($aircraft);
$azov->addUnit($gunner);
$azov->addUnit($paratrooper);
$azov->addUnit($panzer);
$azov->addUnit($shooter);
$azov->addUnit($panzer);
$azov->addUnit($panzer);
$azov->addUnit($panzer);
$azov->addUnit($panzer);

    $azov->addUnit($vzvod1);

        $vzvod1->addUnit($panzer);
        $vzvod1->addUnit($shooter);
        $vzvod1->addUnit($panzer);
        $vzvod1->addUnit($panzer);
        $vzvod1->addUnit($panzer);
        $vzvod1->addUnit($panzer);
        $vzvod1->addUnit($panzer);



$br95 = new Army('95 Бригада');

$br95->addUnit($helicopter);
$br95->addUnit($helicopter);
$br95->addUnit($helicopter);
$br95->addUnit($aircraft);
$br95->addUnit($gunner);
$br95->addUnit($paratrooper);
$br95->addUnit($paratrooper);
$br95->addUnit($paratrooper);
$br95->addUnit($paratrooper);
$br95->addUnit($paratrooper);
$br95->addUnit($paratrooper);
$br95->addUnit($paratrooper);
$br95->addUnit($shooter);


$somali = new Army('Сомали');

$somali->addUnit($panzer);
$somali->addUnit($panzer);
$somali->addUnit($panzer);
$somali->addUnit($panzer);
$somali->addUnit($gunner);
$somali->addUnit($shooter);
$somali->addUnit($shooter);
$somali->addUnit($shooter);
$somali->addUnit($shooter);
$somali->addUnit($shooter);


echo $azov->getHealth();
echo '<br>';
echo $azov->getAttack();
echo '<br>';













/*
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
$shape5 = new Square(7);

$container = new ShapeContainer();

$container->addShape($shape1);
$container->addShape($shape2);
$container->addShape($shape3);
$container->addShape($shape4);


echo $container->getPerimeter();
echo '<br>';
echo $container->getSquare();
echo '<br>';


/////////////////////////////////////////////////////////////////

$cont3 = new Container3();
$cont2 = new Container2();
$cont1 = new Container1();


$cont1->addShape($shape1);
$cont1->addShape($shape2);

$cont2->addShape($shape3);
$cont2->addShape($shape4);

$cont3->addShape($cont1);
$cont3->addShape($cont2);
$cont3->addShape($shape5);

echo $cont3->getSquare();
echo '<br>';
*/