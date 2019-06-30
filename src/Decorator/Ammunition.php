<?php


namespace Decorator;


class Ammunition implements Produсts
{
    public function getName(): string
    {
        return 'Боеприпассы';
    }

    public function getPrice(): float
    {
        return 17.99;
    }

    public function getQuantity(): int
    {
        return 77;
    }
}