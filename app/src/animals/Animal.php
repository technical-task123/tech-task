<?php

/**
 * Animal.php
 *
 * PHP version 7.0
 *
 * Abstract class which describes animal entity
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo\animals;

/**
 * @class Animal
 */
abstract class Animal
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $abilities = ['eat',];

    /**
     * Method for eating something
     *
     * @param string $object - required
     *
     * @throws \Exception
     *
     * @return string
     */
    public function eat(string $object) : string
    {
        if (empty($object)) {
            throw new \Exception('Nothing to eat.');
        }

        return $this->name . ' is eating ' . $object;
    }

    /**
     * Get abiliaties of the animal
     *
     * @return array
     */
    public function getAbilities() : array
    {
        return $this->abilities;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
}
