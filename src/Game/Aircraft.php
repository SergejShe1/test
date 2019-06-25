<?php


namespace Game;


class Aircraft implements Unit
{

    private $health;
    private $attack;


    public function getHealth(): int
    {
        return $this->health = 350;
    }

    public function getAttack(): int
    {
        return $this->attack = 200;
    }

    public function getName(): string
    {
        return 'Истребитель';
    }
}