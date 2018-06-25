<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class SparrowTest extends TestCase
{
    public function testGetName()
    {
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('sparrow');
        $this->assertEquals('sparrow', $animal->getName());
    }
    public function testAction()
    {
        $result = [
            'sparrow walk',
            'sparrow tweet',
            'sparrow fly'
        ];
        $this->expectOutputString(implode(PHP_EOL, $result) . PHP_EOL);
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('sparrow');
        $animal->runAction();
    }
    public function testEat()
    {
        $food = 'food';
        $this->expectOutputString('sparrow eat ' . $food . PHP_EOL);
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('sparrow');
        $animal->eat($food);
    }
}
