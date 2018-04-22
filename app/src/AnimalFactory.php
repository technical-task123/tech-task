<?php

/**
 * AnimalFactory.php
 *
 * PHP version 7.0
 *
 * Abstract factory for Animal class
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo;
use App\Zoo\animals\Animal;

/**
 * @class AnimalFactory
 */
class AnimalFactory
{
    /**
     * Create a new animal by the name
     *
     * @param string $animalName
     *
     * @return Animal
     *
     * @throws \Exception
     */
    public function create(string $animalName) : Animal
    {
        if (empty($animalName)) {
            throw new \Exception('Empty input parameter $animalName');
        }
        $className = 'App\Zoo\animals\\' . ucfirst($animalName);
        if (!class_exists($className)) {
            throw new \Exception('Animal is undefined: ' . var_export($className, 1));
        }
        return new $className;
    }
}
