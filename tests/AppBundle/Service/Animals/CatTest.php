<?php

namespace Tests\AppBundle\Service\Animals;

use PHPUnit\Framework\TestCase;
use AppBundle\Service\Animals\Cat;

class CatTest extends TestCase
{
    public function testGetName()
    {
        $cat = new Cat();
        $this->assertEquals('cat', $cat->getName());
    }

    public function testGetSound()
    {
        $cat = new Cat();
        $this->assertEquals('meov', $cat->getSound());
    }

    public function testWalk()
    {
        $cat = new Cat();
        $cat->walk();
        $this->expectOutputString('cat is walking' . PHP_EOL);
    }

    public function testMakeSounds()
    {
        $cat = new Cat();
        $cat->makeSounds();
        $this->expectOutputString('cat meov' . PHP_EOL);
    }

    public function testEat()
    {
        $food = 'food';
        $animal = new Cat();
        $animal->eat($food);
        $this->expectOutputString('cat eat food' . PHP_EOL);
    }
}
