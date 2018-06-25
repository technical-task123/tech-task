<?php declare(strict_types=1);

namespace TestTask\Entities;

class AnimalFactory
{
    public static function makeAnimal(string $animal): Animal
    {
        switch ($animal) {
            case 'cat':
                return new Cat($animal);
            case 'dog':
                return new Dog($animal);
            case 'sparrow':
                return new Sparrow($animal);
            case 'rat':
                return new Rat($animal);
            default:
                throw new \InvalidArgumentException('Wrong animal!');
        }
    }
}