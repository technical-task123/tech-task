<?php

namespace App\Zoo;

/**
 * Class Animal
 */
class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function walk()
    {
        if($this->name == 'dog' || $this->name == 'cat' || $this->name == 'rat')
            echo $this->name . ' walking';
    }

    public function meow()
    {
        echo $this->name . ' meow';
    }

    public function run()
    {
        echo $this->name . ' run';
    }

    public function wuf()
    {
        echo $this->name . ' wuf';
    }

    public function byte($object)
    {
        echo $this->name . ' has bitten' . $object;
    }

    public function fly()
    {
        echo $this->name . ' fly';
    }

    public function pi()
    {
        echo $this->name . ' pi';
    }

    public function tweet()
    {
        echo $this->name . ' tweet';
    }

    public function eat(string $object)
    {
        echo $this->name . ' eats ' . $object;
    }
}
