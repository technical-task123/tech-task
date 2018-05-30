<?php

namespace Test\AnimalsInterface\Behaviours;

use Test\Model\AbstractAnimal;

/**
 * Interface SoundBehaviour
 * @package Test\AnimalsInterface\Behaviours
 */
interface SoundBehaviour
{
    /**
     * @param AbstractAnimal $animal
     * @return mixed
     */
    public function sound(AbstractAnimal $animal): void;
}
