<?php

use Ajax\Zoo\Dog;

class DogTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $dog = new Dog();
        $this->assertEquals('dog', $dog->getName());
    }
    public function testInteract()
    {
        $this->expectOutputString('dog is walking' . PHP_EOL . 'dog is running' . PHP_EOL . 'dog has bitten man' . PHP_EOL);
        $animal = new Dog();
        $animal->interact();
    }
    public function testMakeSound()
    {
        $this->expectOutputString('dog sounds "wuf"' . PHP_EOL);
        $animal = new Dog();
        $animal->makeSound();
    }
    public function testEat()
    {
        $food = 'meat';
        $this->expectOutputString('dog is eating meat' . PHP_EOL);
        $animal = new Dog();
        $animal->eat($food);
    }
}
