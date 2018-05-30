<?php

namespace Test\Factory;

use Test\Enum\AnimalType;
use Test\Model\AbstractAnimal;
use Test\Model\Behaviours\Eat\DefaultEatingBehaviour;
use Test\Model\Behaviours\Sound\CustomSoundBehaviour;
use Test\Model\Sparrow;

/**
 * Class SparrowFactory
 * @package Test\Factory
 */
class SparrowFactory implements AbstractAnimalFactory
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return AnimalType::SPARROW;
    }

    /**
     * @return Sparrow
     */
    public function getAnimal(): AbstractAnimal
    {
        $name = 'sparrow' . rand(0, 1000);
        $tweetSound = 'tweet';

        return new Sparrow($name, new DefaultEatingBehaviour(), new CustomSoundBehaviour($tweetSound));
    }
}
