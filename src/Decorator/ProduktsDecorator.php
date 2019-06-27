<?php


namespace Decorator;


abstract class ProduktsDecorator implements Produkts
{
    /**
     * @var Produkts
     */
    protected $decoratedProducts;

    public function __construct(Produkts $decoratedProducts)
    {
        $this->decoratedProducts = $decoratedProducts;
    }

    public function getPrice(): float
    {
        // TODO: Implement getPrice() method.
        $this->decoratedProducts->getPrice();
    }

}