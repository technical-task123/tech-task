<?php

namespace Test\AnimalsInterface\Behaviours;

use Test\Model\AbstractAnimal;

/**
 * Interface EatingBehaviour
 * @package Test\AnimalsInterface\Behaviours
 */
interface EatingBehaviour
{
    public function eat(AbstractAnimal $animal): void;
}
