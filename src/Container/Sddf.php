<?php

namespace Container;


use Shape\ShapeInterface;

class Sddf
{
    /** @var ShapeInterface */
    private $shape;

    /**
     * Sddf constructor.
     * @param ShapeInterface $shape
     */
    public function __construct(ShapeInterface $shape)
    {
        $this->shape = $shape;
    }


    /**
     * @return ShapeInterface
     */
    public function getShape(): ShapeInterface
    {
        return $this->shape;
    }


    public function sd(){
        return $this->shape->getPerimeter() * $this->shape->getSquare();
    }

}