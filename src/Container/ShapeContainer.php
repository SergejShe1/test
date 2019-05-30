<?php


namespace Container;


use Shape\ShapeInterface;

class ShapeContainer implements ShapeInterface
{
    /** @var ShapeInterface */
    private $shape;

    public function addShape(ShapeInterface $shape){
        $this->shape[] = $shape;

        return $this;
    }
}
