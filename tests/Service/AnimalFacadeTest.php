<?php

namespace Tests\Service;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Test\Model\AbstractAnimal;
use Test\Service\AnimalFacade;

/**
 * Class AnimalFacadeTest
 * @package Tests
 */
class AnimalFacadeTest extends TestCase
{
    /**
     * @var AnimalFacade
     */
    private $animalFacade;

    /**
     * @var AbstractAnimal|MockObject
     */
    private $animalMock;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();
        $this->animalMock = $this->getMockBuilder(AbstractAnimal::class)
            ->disableOriginalConstructor()
            ->setMethods(['eat', 'sound'])
            ->getMockForAbstractClass();
        $this->animalMock->expects($this->once())->method('eat')->willReturn(null);
        $this->animalMock->expects($this->once())->method('sound')->willReturn(null);

        $this->animalFacade = new AnimalFacade();
    }

    /**
     *
     */
    public function testExpectedCalls()
    {
        $this->animalFacade->eat($this->animalMock);
        $this->animalFacade->move($this->animalMock);
        $this->animalFacade->sound($this->animalMock);
    }
}
