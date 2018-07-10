<?php

require 'Animal.php';

class Cat extends Animal
{
    protected $name;

    public function __construct($name = 'Smarty')
    {
        parent::__construct($name);
    }

    public function meow()
    {
        return "Cat $this->name is saying meow";
    }
}