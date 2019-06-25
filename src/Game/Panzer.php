<?php


namespace Game;


class Panzer implements Unit
{
    private $health;
    private $attack;


    public function getHealth(): int
    {
        return $this->health = 700;
    }

    public function getAttack(): int
    {
        return $this->attack = 800;
    }

    public function getName(): string
    {
        return 'Танк';
    }
}