<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RatTest extends TestCase
{

    public function testPi()
    {
        $rat = \Zoo\AnimalFactory::getInstance('Rat');
        $this->expectOutputString('Rat Pi<br>');
        $rat->pi();
    }

    public function testWalk()
    {
        $rat = \Zoo\AnimalFactory::getInstance('Rat');
        $this->expectOutputString('Rat walking<br>');
        $rat->walk();
    }

    public function testRun()
    {
        $rat = \Zoo\AnimalFactory::getInstance('Rat');
        $this->expectOutputString($rat->getName() .' running<br>');
        $rat->run();
    }

}