<?php


namespace Decorator;


abstract class ProduсtsDecorator implements Produсts
{
    /**
     * @var Produсts
     */
    protected $decoratedProducts;

    public function __construct(Produсts $decoratedProducts)
    {
        $this->decoratedProducts = $decoratedProducts;
    }

    public function getPrice(): float
    {
        // TODO: Implement getPrice() method.
        $this->decoratedProducts->getPrice();
    }

}