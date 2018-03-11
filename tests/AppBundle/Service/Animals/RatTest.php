<?php

namespace Tests\AppBundle\Service\Animals;

use PHPUnit\Framework\TestCase;
use AppBundle\Service\Animals\Rat;

class RatTest extends TestCase
{
    public function testGetName()
    {
        $cat = new Rat();
        $this->assertEquals('rat', $cat->getName());
    }

    public function testGetSound()
    {
        $cat = new Rat();
        $this->assertEquals('pi', $cat->getSound());
    }

    public function testMakeSounds()
    {
        $cat = new Rat();
        $cat->makeSounds();
        $this->expectOutputString('rat pi' . PHP_EOL);
    }
}
