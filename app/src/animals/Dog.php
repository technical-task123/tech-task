<?php

/**
 * Dog.php
 *
 * PHP version 7.0
 *
 * Class describes dog entity
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo\animals;

use App\Zoo\animals\abilities\WalkingTrait;

/**
 * @class Dog
 */
class Dog extends Animal
{
    use WalkingTrait;

    /**
     * @var array
     */
    protected $abilities = ['walk', 'run', 'wuf', 'bite', 'eat',];

    /**
     * @var string
     */
    protected $name = 'dog';

    /**
     * Method for running
     *
     * @return string
     */
    public function run() : string
    {
        return $this->name . ' is running';
    }

    /**
     * Method for wuf
     *
     * @return string
     */
    public function wuf() : string
    {
        return $this->name . ' is woofing';
    }

    /**
     * Bite something or somebody
     *
     * @param string $object
     *
     * @return string
     *
     * @throws \Exception
     */
    public function bite(string $object) : string
    {
        if (empty($object)) {
            throw new \Exception('Nothing to bite');
        }

        return $this->name . ' has bitten ' . $object;
    }
}
