<?php


namespace Container;

use Shape\ShapeInterface;

class ShapeContainer implements ShapeInterface

{
    /**
     * @var array
     */
    private $shapes = [];


    public function addShape(ShapeInterface $shape)
    {
        $this->shapes[] = $shape;
        return $this;
    }

    public function getPerimeter(): float
    {
        $sum = 0;

        foreach ($this->shapes as $shape) {

            $sum += $shape->getPerimeter();
        }
        return $sum;
    }

    public function getSquare(): float
    {
        $sum = 0;

        foreach ($this->shapes as $shape) {

            $sum += $shape->getSquare();
        }
        return $sum;
    }

    public function getName(): string
    {
        return 'Контейнер';
    }
}
