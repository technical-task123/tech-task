<?php

/**
 * AnimalTest.php
 *
 * PHP version 7.0
 *
 * Abstract class for Unit Tests
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\tests;

require_once AUTOLOADER_PATH;

/**
 * @class AnimalTest
 */
abstract class AnimalTest extends \PHPUnit\Framework\TestCase
{
    protected $animal;

    protected $expectedAbilities = ['eat',];

    public function testGetName()
    {
        self::assertNotEmpty($this->animal->getName());
    }

    public function testEat()
    {
        self::assertEquals($this->animal->eat('grass'), $this->animal->getName() . ' is eating grass');
        self::expectException('\Exception');
        $this->animal->eat('');
    }

    public function testGetAbilities()
    {
        $abilities = $this->animal->getAbilities();
        foreach ($this->expectedAbilities as $ability) {
            self::assertContains($ability, $abilities);
        }
    }
}
