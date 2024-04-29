<?php
namespace Patterns\Factory;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "  ConcreteProduct1";
    }
}