<?php

namespace Tests\AppBundle\Service\Animals;

use PHPUnit\Framework\TestCase;
use AppBundle\Service\Animals\Sparrow;

class SparrowTest extends TestCase
{
    public function testGetName()
    {
        $cat = new Sparrow();
        $this->assertEquals('sparrow', $cat->getName());
    }

    public function testGetSound()
    {
        $cat = new Sparrow();
        $this->assertEquals('tweet', $cat->getSound());
    }

    public function testWalk()
    {
        $cat = new Sparrow();
        $cat->walk();
        $this->expectOutputString('sparrow is walking' . PHP_EOL);
    }

    public function testFly()
    {
        $cat = new Sparrow();
        $cat->fly();
        $this->expectOutputString('sparrow fly' . PHP_EOL);
    }

    public function testMakeSounds()
    {
        $cat = new Sparrow();
        $cat->makeSounds();
        $this->expectOutputString('sparrow tweet' . PHP_EOL);
    }
}
