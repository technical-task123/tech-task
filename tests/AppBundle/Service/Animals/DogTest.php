<?php

namespace Tests\AppBundle\Service\Animals;

use PHPUnit\Framework\TestCase;
use AppBundle\Service\Animals\Dog;

class DogTest extends TestCase
{
    public function testGetName()
    {
        $cat = new Dog();
        $this->assertEquals('dog', $cat->getName());
    }

    public function testGetSound()
    {
        $cat = new Dog();
        $this->assertEquals('wuf', $cat->getSound());
    }

    public function testWalk()
    {
        $cat = new Dog();
        $cat->walk();
        $this->expectOutputString('dog is walking' . PHP_EOL);
    }

    public function testMakeSounds()
    {
        $cat = new Dog();
        $cat->makeSounds();
        $this->expectOutputString('dog wuf' . PHP_EOL);
    }

    public function testByte()
    {
        $cat = new Dog();
        $object = 'man';
        $cat->byte($object);
        $this->expectOutputString('dog has bitten man' . PHP_EOL);
    }

    public function testEat()
    {
        $food = 'food';
        $animal = new Dog();
        $animal->eat($food);
        $this->expectOutputString('dog eat food' . PHP_EOL);
    }

}
