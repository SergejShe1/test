<?php


namespace Game;


class Sniper implements Unit
{
    private $health;
    private $attack;


    public function getHealth(): int
    {
        return $this->health = 25;
    }

    public function getAttack(): int
    {
        return $this->attack = 70;
    }

    public function getName(): string
    {
        return 'Снайпер';
    }
}