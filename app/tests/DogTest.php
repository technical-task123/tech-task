<?php

/** DogTest.php
 *
 * PHP version 7.0
 *
 * Unit Tests for Dog
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\tests;

use App\Zoo\animals\Dog;

/**
 * @class DogTest
 */
class DogTest extends AnimalTest
{
    protected $animal;

    protected $expectedAbilities = ['walk', 'run', 'wuf', 'bite', 'eat',];

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->animal = new Dog();
        parent::__construct($name, $data, $dataName);
    }

    public function testWalk()
    {
        self::assertEquals($this->animal->walk(), $this->animal->getName() . ' is walking');
    }

    public function testWuf()
    {
        self::assertEquals($this->animal->wuf(), $this->animal->getName() . ' is woofing');
    }

    public function testRun()
    {
        self::assertEquals($this->animal->run(), $this->animal->getName() . ' is running');
    }

    public function testBit()
    {
        self::assertEquals($this->animal->bite('itself'), $this->animal->getName() . ' has bitten itself');
        self::expectException('\Exception');
        $this->animal->bite('');
    }
}
