<?php
namespace Patterns\Factory;

abstract class Creator
{
    abstract public function factoryMethod(): Product;
    public function someOperation(): string
    {
        $product = $this->factoryMethod();
        $result = "Creator:  " .
            $product->operation();
        return $result;
    }
}