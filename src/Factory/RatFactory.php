<?php

namespace Test\Factory;


use Test\Enum\AnimalType;
use Test\Model\AbstractAnimal;
use Test\Model\Behaviours\Eat\DefaultEatingBehaviour;
use Test\Model\Behaviours\Sound\CustomSoundBehaviour;
use Test\Model\Rat;

/**
 * Class RatFactory
 * @package Test\Factory
 */
class RatFactory implements AbstractAnimalFactory
{

    /**
     * @return string
     */
    public function getType(): string
    {
        return AnimalType::RAT;
    }

    /**
     * @return AbstractAnimal
     */
    public function getAnimal(): AbstractAnimal
    {
        $name = 'rat' . rand(0, 1000);
        $piSound = 'pi';

        return new Rat($name, new DefaultEatingBehaviour(), new CustomSoundBehaviour($piSound));
    }
}
