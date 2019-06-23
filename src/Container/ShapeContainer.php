<?php


namespace Container;


use Shape\ShapeInterface;

class ShapeContainer implements ShapeInterface

{
    private $shape;


    public function __construct(ShapeInterface $shape)
    {
        $this->shape = $shape;
    }

    /** @var Shape[] */

    public function addShape(ShapeInterface $shape){
        $this->shape[] = $shape;
        return $this;
    }

    public function getPerimeter(): float
    {
        return $this->shape->getPerimeter() + $this->shape->getPerimeter();
    }

    public function getSquare(): float
    {
        return $this->shape->getSquare() + $this->shape->getSquare();

    }

    public function getName(): string
    {
        return 'Контейнер';
    }
}
