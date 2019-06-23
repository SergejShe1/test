<?php


namespace Shape;


class Square implements ShapeInterface
{
    //private $name;
    private $x;

    public function __construct(float $x)
    {
        //$this->name = $name;
        $this->x = $x;
    }

    public function getSquare(): float
    {
        return $this->x * $this->x;
    }

    public function getPerimeter(): float
    {
        return ($this->x + $this->x) * 2;
    }

    public function getName(): string
    {
        return get_class($this);
    }

}