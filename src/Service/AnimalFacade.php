<?php

namespace Test\Service;

use Test\AnimalsInterface\FlyableInterface;
use Test\AnimalsInterface\RunnableInterface;
use Test\AnimalsInterface\WalkableInterface;
use Test\Model\AbstractAnimal;

/**
 * Class AnimalFacade
 * @package Test\Service
 */
class AnimalFacade
{
    public function sound(AbstractAnimal $animal)
    {
        $animal->sound();
    }

    public function move(AbstractAnimal $animal)
    {
        if ($animal instanceof WalkableInterface) {
            $animal->walk();
        }
        if ($animal instanceof RunnableInterface) {
            $animal->run();
        }
        if ($animal instanceof FlyableInterface) {
            $animal->fly();
        }
    }

    public function eat(AbstractAnimal $animal)
    {
        $animal->eat();
    }
}