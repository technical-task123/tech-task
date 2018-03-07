<?php

use Ajax\Zoo\AnimalFactory;

class AnimalFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testGetKnownAnimals()
    {
        $this->assertEquals(
            ['cat', 'dog', 'rat', 'sparrow'],
            AnimalFactory::getKnownAnimals()
        );
    }
    public function testCreateKnownAnimals()
    {
        $animals = AnimalFactory::getKnownAnimals();
        foreach ($animals as $animalName) {
            $animal = AnimalFactory::getAnimal($animalName);
            $this->assertEquals($animalName, $animal->getName());
        }
    }
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Can't create animal with name dolphin
     */
    public function testCreateUnknownAnimal()
    {
        $animal = AnimalFactory::getAnimal('dolphin');
    }
}
