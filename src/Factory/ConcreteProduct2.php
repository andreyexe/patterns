<?php
namespace Patterns\Factory;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "  ConcreteProduct2";
    }
}
