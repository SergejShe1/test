<?php


namespace Game;


class Paratrooper implements Unit
{
    private $health;
    private $attack;


    public function getHealth(): int
    {
        return $this->health = 75;
    }

    public function getAttack(): int
    {
        return $this->attack = 50;
    }

    public function getName(): string
    {
        return 'Десантник';
    }
}