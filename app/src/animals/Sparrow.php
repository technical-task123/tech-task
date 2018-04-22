<?php

/**
 * Sparrow.php
 *
 * PHP version 7.0
 *
 * Class describes sparrow entity
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo\animals;

/**
 * @class Sparrow
 */
class Sparrow extends Animal
{
    /**
     * @var array
     */
    protected $abilities = ['walk', 'tweet', 'fly', 'eat',];

    /**
     * @var string
     */
    protected $name = 'sparrow';

    /**
     * Method for flying
     *
     * @return string
     */
    public function fly() : string
    {
        return $this->name . ' is flying';
    }

    /**
     * Method for tweeting
     *
     * @return string
     */
    public function tweet() : string
    {
        return $this->name . ' is tweeting';
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
