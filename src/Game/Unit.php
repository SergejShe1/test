<?php


namespace Game;


class Unit implements UnitInterface
{
    private $health;
    private $attack;
    private $name;


    public function __construct($name, $health, $attack)
    {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getName(): string
    {
        return $this->name;
    }
}