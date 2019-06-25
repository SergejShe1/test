<?php


namespace Game;


class Battle
{
    private $army1;
    private $army2;


    public function __construct(Unit  $army1, Unit $army2)
    {
        $this->army1 = $army1;
        $this->army2 = $army2;
    }


    public function getWinner(): int
    {

    }
}