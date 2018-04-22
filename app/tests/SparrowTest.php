<?php

/** SparrowTest.php
 *
 * PHP version 7.0
 *
 * Unit Tests for Sparrow
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\tests;

use App\Zoo\animals\Sparrow;

/**
 * @class SparrowTest
 */
class SparrowTest extends AnimalTest
{
    protected $animal;

    protected $expectedAbilities = ['fly', 'walk', 'eat',];

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->animal = new Sparrow();
        parent::__construct($name, $data, $dataName);
    }

    public function testWalk()
    {
        self::assertEquals($this->animal->walk(), $this->animal->getName() . ' is walking');
    }

    public function testFly()
    {
        self::assertEquals($this->animal->fly(), $this->animal->getName() . ' is flying');
    }
}
