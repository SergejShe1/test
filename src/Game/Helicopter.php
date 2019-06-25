<?php


namespace Game;


class Helicopter implements Unit
{
    private $health;
    private $attack;


    public function getHealth(): int
    {
        return $this->health = 270;
    }

    public function getAttack(): int
    {
        return $this->attack = 150;
    }

    public function getName(): string
    {
        return 'Вертолет';
    }
}