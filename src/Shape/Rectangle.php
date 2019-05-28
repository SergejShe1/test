<?php


namespace Shape;


class Rectangle implements ShapeInterface
{
    private $name;
    private $x;
    private $y;

    public function __construct(float $x, float $y, $name)
    {
        $this->x = $x;
        $this->y = $y;
        $this->name = $name;
    }

    public function getSquare(): float
    {
        return $this->x * $this->y;
    }

    public function getPerimeter(): float
    {
        return $this->x + $this->y;
    }

    public function getName(): string
    {
        return get_class($this);
    }
}