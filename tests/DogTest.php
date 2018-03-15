<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DogTest extends TestCase
{

    public function testWuf()
    {
        $dog = \Zoo\AnimalFactory::getInstance('Dog');
        $this->expectOutputString('Dog Wuf!<br>');
        $dog->wuf();
    }

    public function testWalk()
    {
        $dog = \Zoo\AnimalFactory::getInstance('Dog');
        $this->expectOutputString('Dog walking<br>');
        $dog->walk();
    }

    public function testRun()
    {
        $dog = \Zoo\AnimalFactory::getInstance('Dog');
        $this->expectOutputString('Dog running<br>');
        $dog->run();
    }

    public function testBite()
    {
        $dog = \Zoo\AnimalFactory::getInstance('Dog');
        $this->expectOutputString('Dog has bitten man<br>');
        $dog->bite('man');
    }

}