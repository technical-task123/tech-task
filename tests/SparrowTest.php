<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SparrowTest extends TestCase
{

    public function testTweet()
    {
        $sparrow = \Zoo\AnimalFactory::getInstance('Sparrow');
        $this->expectOutputString('Sparrow tweet-tweet<br>');
        $sparrow->tweet();
    }

    public function testWalk()
    {
        $sparrow = \Zoo\AnimalFactory::getInstance('Sparrow');
        $this->expectOutputString('Sparrow walking<br>');
        $sparrow->walk();
    }

    public function testFly()
    {
        $sparrow = \Zoo\AnimalFactory::getInstance('Sparrow');
        $this->expectOutputString('Sparrow fly<br>');
        $sparrow->fly();
    }

}