<?php

/** AnimalServantTest.php
 *
 * PHP version 7.0
 *
 * Unit Tests for AnimalServant
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\tests;

require_once AUTOLOADER_PATH;

use App\Zoo\animals\Cat;
use App\Zoo\AnimalServant;
use App\Zoo\Zoo;

/**
 * @class AnimalServantTest
 */
class AnimalServantTest extends \PHPUnit\Framework\TestCase
{
    protected $animalServant;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->animalServant = new AnimalServant();
        parent::__construct($name, $data, $dataName);
    }

    public function testTreat()
    {
        $result = $this->animalServant->treat(new Cat());
        self::assertEquals('cat is walkingcat is meowingcat is eating food', $result);
        self::expectException('\TypeError');
        $this->animalServant->treat(new Zoo());
    }
}
