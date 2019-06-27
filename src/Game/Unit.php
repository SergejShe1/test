<?php


namespace Game;

class Unit implements UnitInterface
{
    /**
     * @var int
     */
    private $health;
    private $attack;
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name, int $health, int $attack)
    {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getName(): string
    {
        return $this->name;
    }
}