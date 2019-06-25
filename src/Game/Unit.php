<?php


namespace Game;


interface Unit
{
    public function getHealth(): int;

    public function getAttack(): int;

    public function getName(): string;
}