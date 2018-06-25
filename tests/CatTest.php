<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class CatTest extends TestCase
{
    public function testGetName()
    {
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('cat');
        $this->assertEquals('cat', $animal->getName());
    }

    public function testAction()
    {
        $result = [
            'cat walk',
            'cat meow'
        ];
        $this->expectOutputString(implode(PHP_EOL, $result) . PHP_EOL);
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('cat');
        $animal->runAction();
    }

    public function testEat()
    {
        $food = 'food';
        $this->expectOutputString('cat eat ' . $food . PHP_EOL);
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('cat');
        $animal->eat($food);
    }
}
