<?php

/**
 * Rat.php
 *
 * PHP version 7.0
 *
 * Class describes rat entity
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo\animals;

/**
 * @class Rat
 */
class Rat extends Animal
{
    /**
     * @var array
     */
    protected $abilities = ['pip', 'eat',];

    /**
     * @var string
     */
    protected $name = 'rat';

    /**
     * Method for saying pee
     *
     * @return string
     */
    public function pip() : string
    {
        return $this->name . ' is pipping';
    }
}
