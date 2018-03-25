<?php

namespace Entities;

/**
 * Class AnimalFactory
 * @package Entities
 */
class AnimalFactory
{
    /**
     * Make Animal instance
     *
     * @param string $animal
     * @param string $food
     * @return AbstractAnimal
     */
    public static function makeAnimal(string $animal, string $food): AbstractAnimal
    {
        switch ($animal) {
            case 'cat':
                return new Cat($food);
            case 'dog':
                return new Dog($food);
            case 'sparrow':
                return new Sparrow($food);
            case 'rat':
                return new Rat($food);
            default:
                throw new \InvalidArgumentException('Wrong animal!');
        }
    }
}