<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CatTest extends TestCase
{

    public function testMeow()
    {
        $cat = \Zoo\AnimalFactory::getInstance('Cat');
        $this->expectOutputString('Cat Meow!<br>');
        $cat->meow();
    }

    public function testWalk()
    {
        $cat = \Zoo\AnimalFactory::getInstance('Cat');
        $this->expectOutputString('Cat walking<br>');
        $cat->walk();
    }

    public function testRun()
    {
        $cat = \Zoo\AnimalFactory::getInstance('Cat');
        $this->expectOutputString('Cat running<br>');
        $cat->run();
    }

}