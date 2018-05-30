<?php

namespace Test\Factory;

use Test\Enum\AnimalType;
use Test\Model\AbstractAnimal;
use Test\Model\Behaviours\Eat\DefaultEatingBehaviour;
use Test\Model\Behaviours\Sound\CustomSoundBehaviour;
use Test\Model\Dog;

/**
 * Class DogFactory
 * @package Test\Factory
 */
class DogFactory implements AbstractAnimalFactory
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return AnimalType::DOG;
    }

    /**
     * @return Dog
     */
    public function getAnimal(): AbstractAnimal
    {
        $name = 'dog' . rand(0, 1000);
        $woofSound = 'woof';

        return new Dog($name, new DefaultEatingBehaviour(), new CustomSoundBehaviour($woofSound));
    }
}
