<?php

namespace Tests\AppBundle\Service;

use PHPUnit\Framework\TestCase;
use AppBundle\Service\AnimalFactory;

class AnimalFactoryTest extends TestCase
{
    public function testGetAnimal()
    {
        $animalFactory = new AnimalFactory();
        $allKnownAnimals = $animalFactory->getAllExistingAnimals();
        foreach($allKnownAnimals as $name){
            $animal = $animalFactory->getAnimal($name);
            $this->assertEquals($name, $animal->getName());
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Can't create animal
     */
    public function testNotExistsAnimal()
    {
        $animalFactory = new AnimalFactory();
        $animalFactory->getAnimal('lion');
    }
}
