<?php
namespace Patterns\Facade;

class Facade
{
    protected $class1;
    protected $class2;

    public function __construct(){
        $this->class1 = new Class1();
        $this->class2 = new Class2();
    }

    public function run(){
        $this->class1->DoSmth();
        $this->class1->DoSmthElse();

        $this->class2->DoSmth();
        $this->class2->DoSmthElse();
    }
}