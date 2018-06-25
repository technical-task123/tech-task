<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testGetName()
    {
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('dog');
        $this->assertEquals('dog', $animal->getName());
    }
    public function testAction()
    {
        $result = [
            'dog walk',
            'dog run',
            'dog wuf',
            'dog has bitten man',
        ];
        $this->expectOutputString(implode(PHP_EOL, $result) . PHP_EOL);
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('dog');
        $animal->runAction();
    }
    public function testEat()
    {
        $food = 'food';
        $this->expectOutputString('dog eat ' . $food . PHP_EOL);
        $animal = TestTask\Entities\AnimalFactory::makeAnimal('dog');
        $animal->eat($food);
    }
}
