<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class RatTest extends TestCase
{
    public function testGetName()
    {
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('rat');
        $this->assertEquals('rat', $animal->getName());
    }
    public function testAction()
    {
        $result = [
            'rat pi'
        ];
        $this->expectOutputString(implode(PHP_EOL, $result) . PHP_EOL);
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('rat');
        $animal->runAction();
    }
    public function testEat()
    {
        $food = 'food';
        $this->expectOutputString('rat eat ' . $food . PHP_EOL);
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('rat');
        $animal->eat($food);
    }
}
