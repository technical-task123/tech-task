<?php

use Ajax\Zoo\Cat;

class CatTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $cat = new Cat();
        $this->assertEquals('cat', $cat->getName());
    }
    public function testInteract()
    {
        $this->expectOutputString( 'cat is walking' . PHP_EOL);
        $animal = new Cat();
        $animal->interact();
    }
    public function testMakeSound()
    {
        $this->expectOutputString('cat sounds "meow"' . PHP_EOL);
        $animal = new Cat();
        $animal->makeSound();
    }
    public function testEat()
    {
        $food = 'fish';
        $this->expectOutputString('cat is eating fish' . PHP_EOL);
        $animal = new Cat();
        $animal->eat($food);
    }
}
