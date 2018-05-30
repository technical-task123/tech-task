<?php

namespace Test\Model\Behaviours\Eat;

use Test\Model\AbstractAnimal;
use Test\AnimalsInterface\Behaviours\EatingBehaviour;

/**
 * Class DefaultEatingBehaviour
 * @package Test\Model\Behaviours
 */
class DefaultEatingBehaviour implements EatingBehaviour
{
    public function eat(AbstractAnimal $animal): void
    {
        echo $animal->getName() . ' is eating';
    }
}
