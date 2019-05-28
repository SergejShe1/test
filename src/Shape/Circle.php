<?php

namespace Shape;


class Circle implements ShapeInterface
{
    const PI = 3.14;

    private $name;
    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
        //$this->name = $name;
    }

    public function getSquare(): float
    {
        return self::PI * ($this->r * $this->r);
    }

    public function getPerimeter(): float
    {
        return self::PI * pow($this->r,2);
    }

    public function getName(): string
    {
        return get_class($this);
    }
}
