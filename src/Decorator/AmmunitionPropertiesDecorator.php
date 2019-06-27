<?php


namespace Decorator;


class AmmunitionPropertiesDecorator extends ProduktsDecorator
{
    public function __construct(Produkts $decoratedProdukts)
    {
        parent::__construct($decoratedProdukts);
    }

    private function getMarkup()
    {
        return  0.2;
    }

    public function getName(): string
    {
        return $this->decoratedProducts->getName();
    }

    public function getPrice(): float
    {
        $markup = $this->decoratedProducts->getPrice() * $this->getMarkup();
        $markup = $this->decoratedProducts->getPrice() + $markup;
        return $markup;
    }

    public function getQuantity(): int
    {

        return $this->decoratedProducts->getQuantity() ;
    }

}