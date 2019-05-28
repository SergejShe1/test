<?php


namespace Shape;


class Triangle implements ShapeInterface
{
    //private $name;
    private $a;
    private $b;
    private $c;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getPerimeter(): float
    {
        return $this->a + $this->b + $this->c;
    }

    public function getSquare(): float
    {
        $p = $this->getPerimeter() / 2;
        return sqrt(($p*($p-$this->a)*($p-$this->b)*($p-$this->c)));

    }

    public function getName(): string
    {
        return get_class($this);
    }
}