<?php

namespace Ajax\Zoo;

class AnimalFactory
{
    /**
     * Creates Animal by provided $name
     *
     * @param string $name
     *
     * @return Animal
     */
    public static function getAnimal(string $name): Animal
    {
        switch ($name) {
            case 'dog':
                return new Dog();
            case 'cat':
                return new Cat();
            case 'sparrow':
                return new Sparrow();
            case 'rat':
                return new Rat();
            default:
                throw new \InvalidArgumentException(sprintf('Can\'t create animal with name %s', $name));
        }
    }

    /**
     * Returns available animals names
     *
     * @return array
     */
    public static function getKnownAnimals()
    {
        return ['cat', 'dog', 'rat', 'sparrow'];
    }
}
