<?php

namespace AppBundle\Service;

use AppBundle\Service\Animals\{Cat, Dog, Rat, Sparrow};
use Symfony\Component\Cache\Exception\InvalidArgumentException;

/**
 * Class AnimalFactory
 * @package AppBundle\Service
 */
class AnimalFactory
{
    /**
     * Get array of all existing animals
     *
     * @return mixed
     */
    public function getAllExistingAnimals(): array
    {
        return ['cat', 'dog', 'sparrow', 'rat'];
    }

    /**
     * Get new class of selected animal
     *
     * @param string $animal
     * @return AbstractAnimal
     */
    public function getAnimal(string $animal): AbstractAnimal
    {
        switch($animal)
        {
            case 'cat':
                return new Cat();
            case 'dog':
                return new Dog();
            case 'sparrow':
                return new Sparrow();
            case 'rat':
                return new Rat();
            default:
                throw new InvalidArgumentException(sprintf('Can\'t create animal %s', $animal));
        }
    }
}