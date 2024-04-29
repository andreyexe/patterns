<?php
namespace Patterns\AbstractFactory;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}