<?php


namespace Game;


class Shooter implements Unit
{
    private $health;
    private $attack;


    public function getHealth(): int
    {
        return $this->health = 40;
    }

    public function getAttack(): int
    {
        return $this->attack = 40;
    }

    public function getName(): string
    {
        return 'Стрелок';
    }
}