<?php

/** CatTest.php
 *
 * PHP version 7.0
 *
 * Unit Tests for Cat
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\tests;

use App\Zoo\animals\Cat;

/**
 * @class CatTest
 */
class CatTest extends AnimalTest
{
    protected $animal;

    protected $expectedAbilities = ['eat', 'meow', 'walk',];

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->animal = new Cat();
        parent::__construct($name, $data, $dataName);
    }

    public function testWalk()
    {
        self::assertEquals($this->animal->walk(), $this->animal->getName() . ' is walking');
    }

    public function testMeow()
    {
        self::assertEquals($this->animal->meow(), $this->animal->getName() . ' is meowing');
    }
}
