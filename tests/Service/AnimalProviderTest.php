<?php

namespace Tests\Service;

use PHPUnit\Framework\TestCase;
use Test\Factory\AbstractAnimalFactory;
use Test\Model\AbstractAnimal;
use Test\Service\AnimalProvider;

/**
 * Class AnimalProviderTest
 * @package Tests
 */
class AnimalProviderTest extends TestCase
{
    /**
     * @var AnimalProvider
     */
    private $animalProvider;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();
        $this->animalProvider = new AnimalProvider();
    }

    /**
     * assert exception if empty factories
     * @throws \Exception
     */
    public function testEmptyFactories()
    {
        $this->expectException(\Exception::class);
        $this->animalProvider->getAnimal('test');
    }

    /**
     * test expected calls
     */
    public function testExpectedCalls()
    {
        $factoryMock = $this->getMockBuilder(AbstractAnimalFactory::class)
            ->setMethods(['getType', 'getAnimal'])
            ->getMock();
        $testType = 'testType';
        $animalStub = $this->getMockBuilder(AbstractAnimal::class)
            ->setMethods(['eat', 'sound'])
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $factoryMock->expects($this->once())->method('getType')->willReturn($testType);
        $factoryMock->expects($this->once())->method('getAnimal')->willReturn($animalStub);
        $this->animalProvider->addFactory($factoryMock);
        $this->assertInstanceOf(AbstractAnimal::class, $this->animalProvider->getAnimal($testType));
    }
}
