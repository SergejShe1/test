<?php


namespace Game;


class Battle
{
    private $health;
    private $attack;


    public function __construct(int $health, int $attack)
    {
        $this->health = $health;
        $this->attack = $attack;
    }


    public function getWinner(): int
    {

    }
}