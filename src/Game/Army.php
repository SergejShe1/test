<?php


namespace Game;


class Army implements UnitInterface
{
    private $name;
    private $units = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addUnit(UnitInterface $unit)
    {
        $this->units[] = $unit;
        return $this;
    }

    public function getHealth(): int
    {
        $sum = 0;

        foreach ($this->units as $unit) {

            $sum += $unit->getHealth();
        }
        return $sum;
    }

    public function getAttack(): int
    {
        $sum = 0;

        foreach ($this->units as $unit) {

            $sum += $unit->getAttack();
        }
        return $sum;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

