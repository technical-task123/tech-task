<?php

use Ajax\Zoo\Sparrow;

class SparrowTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $sparrow = new Sparrow();
        $this->assertEquals('sparrow', $sparrow->getName());
    }
    public function testInteract()
    {
        $this->expectOutputString('sparrow is walking' . PHP_EOL . 'sparrow is flying' . PHP_EOL);
        $animal = new Sparrow();
        $animal->interact();
    }
    public function testMakeSound()
    {
        $this->expectOutputString('sparrow sounds "tweet"' . PHP_EOL);
        $animal = new Sparrow();
        $animal->makeSound();
    }
    public function testEat()
    {
        $food = 'seeds';
        $this->expectOutputString('sparrow is eating seeds' . PHP_EOL);
        $animal = new Sparrow();
        $animal->eat($food);
    }
}
