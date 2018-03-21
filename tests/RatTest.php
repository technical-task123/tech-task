<?php

use Ajax\Zoo\Rat;

class RatTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $rat = new Rat();
        $this->assertEquals('rat', $rat->getName());
    }
    public function testInteract()
    {
        $this->expectOutputString('');
        $animal = new Rat();
        $animal->interact();
    }
    public function testMakeSound()
    {
        $this->expectOutputString('rat sounds "pi"' . PHP_EOL);
        $animal = new Rat();
        $animal->makeSound();
    }
    public function testEat()
    {
        $food = 'millet';
        $this->expectOutputString('rat is eating millet' . PHP_EOL);
        $animal = new Rat();
        $animal->eat($food);
    }
}
