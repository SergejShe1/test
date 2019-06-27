<?php


namespace Game;

interface UnitInterface
{

    public function getHealth(): int;

    public function getAttack(): int;

    public function getName(): string;
}