<?php

namespace Test\Factory;

use Test\Enum\AnimalType;
use Test\Model\AbstractAnimal;
use Test\Model\Behaviours\Eat\DefaultEatingBehaviour;
use Test\Model\Behaviours\Sound\CustomSoundBehaviour;
use Test\Model\Cat;

/**
 * Class CatFactory
 * @package Test\Factory
 */
class CatFactory implements AbstractAnimalFactory
{

    public function getType(): string
    {
        return AnimalType::CAT;
    }

    public function getAnimal(): AbstractAnimal
    {
        $name = 'cat' . rand(0, 1000);
        $mewSound = 'meow';

        return new Cat($name, new DefaultEatingBehaviour(), new CustomSoundBehaviour($mewSound));
    }
}
