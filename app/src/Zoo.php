<?php

/**
 * Zoo.php
 *
 * PHP version 7.0
 *
 * Class Zoo provides a pool for animals
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo;

/**
 * @class Zoo
 */
class Zoo
{
    /**
     * @var array - animals pool (is empty by default)
     */
    private $pool = [];

    /**
     * Zoo constructor.
     *
     * @param array $animals
     *
     * @return void
     */
    public function __construct(array $animals = [])
    {
        if (!empty($animals)) {
            foreach ($animals as $animalName) {
                $this->addAnimal($animalName);
            }
        }
    }

    /**
     * Add animal to the pool
     *
     * @param string $animalName
     *
     * @return void
     */
    public function addAnimal(string $animalName)
    {
        $this->pool[] = AnimalFactory::create($animalName);
    }

    /**
     * Get animal from the pool
     *
     * @return \Iterator
     */
    public function getAnimal() : \Iterator
    {
        foreach ($this->pool as $animal) {
            yield $animal;
        }
    }
}
