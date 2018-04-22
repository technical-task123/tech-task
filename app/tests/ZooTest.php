<?php

/** ZooTest.php
 *
 * PHP version 7.0
 *
 * Unit Tests for Zoo class
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\tests;

use App\Zoo\Zoo;

require_once AUTOLOADER_PATH;

/**
 * @class ZooTest
 */
class ZooTest extends \PHPUnit\Framework\TestCase
{
    protected $zoo;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->zoo = new Zoo(['cat', 'dog',]);
        parent::__construct($name, $data, $dataName);
    }

    public function testGetAnimals()
    {
        $expected = ['\App\Zoo\animals\Cat', '\App\Zoo\animals\Dog'];
        foreach ($this->zoo->getAnimal() as $k => $animal) {
            self::assertInstanceOf($expected[$k], $animal);
        }
    }

    public function testAddAnimals()
    {
        $this->zoo->addAnimal('rat');
        $expected = ['\App\Zoo\animals\Cat', '\App\Zoo\animals\Dog', '\App\Zoo\animals\Rat'];
        foreach ($this->zoo->getAnimal() as $k => $animal) {
            self::assertInstanceOf($expected[$k], $animal);
        }
    }

    public function testTreatAnimals()
    {
        $result = $this->zoo->treatAnimals();
        self::assertNotEmpty($result);
        self::assertRegExp('/cat.+dog/', $result);
    }
}
