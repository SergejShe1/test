<?php


namespace Decorator;


interface Produkts
{

    public function getPrice(): float;

    public function getQuantity(): int;

    public function getName(): string;
}
