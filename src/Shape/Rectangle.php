<?php


namespace Shape;


class Rectangle implements ShapeInterface
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getSquare(): float
    {
        return $this->x * $this->y;
    }

    public function getPerimeter(): float
    {
        return ($this->x + $this->y)*2;
    }

    public function getName(): string
    {
        return get_class($this);
    }
}