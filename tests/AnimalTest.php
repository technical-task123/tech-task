<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AnimalTest extends TestCase
{
    public function testGetName()
    {
        $animal = \Zoo\AnimalFactory::getInstance('Cat');
        $this->assertEquals('Cat', $animal->getName());
    }

    public function testEat()
    {
        $cat = \Zoo\AnimalFactory::getInstance('Cat');
        $this->expectOutputString('Cat has just eat cat food<br>');
        $cat->eat('cat food');
    }

}