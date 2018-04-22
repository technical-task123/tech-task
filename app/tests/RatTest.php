<?php

/** RatTest.php
 *
 * PHP version 7.0
 *
 * Unit Tests for Rat
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\tests;

use App\Zoo\animals\Rat;

/**
 * @class RatTest
 */
class RatTest extends AnimalTest
{
    protected $animal;

    protected $expectedAbilities = ['pip', 'eat',];

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->animal = new Rat();
        parent::__construct($name, $data, $dataName);
    }

    public function testPip()
    {
        self::assertEquals($this->animal->pip(), $this->animal->getName() . ' is pipping');
    }
}
