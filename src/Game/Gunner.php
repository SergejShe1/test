<?php


namespace Game;


class Gunner implements UnitInterface
{
    private $health;
    private $attack;



    public function getHealth(): int
    {
        return $this->health = 35;
    }

    public function getAttack(): int
    {
        return $this->attack = 120;
    }

    public function getName(): string
    {
        return 'Артелерист';
    }
}