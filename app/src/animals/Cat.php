<?php

/**
 * Cat.php
 *
 * PHP version 7.0
 *
 * Class describes cat entity
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo\animals;

/**
 * @class Cat
 */
class Cat extends Animal
{
    /**
     * @var array
     */
    protected $abilities = ['walk', 'meow', 'eat',];

    /**
     * @var string
     */
    protected $name = 'cat';

    /**
     * Method for saying meow
     *
     * @return string
     */
    public function meow() : string
    {
        return $this->name . ' is meowing';
    }

    /**
     * Method for walking
     *
     * @return string
     */
    public function walk() : string
    {
        return $this->name . ' is walking';
    }
}
