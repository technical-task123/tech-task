<?php

/** AnimalFactoryTest.php
 *
 * PHP version 7.0
 *
 * Unit Tests for AnimalFactory
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\tests;

require_once AUTOLOADER_PATH;

use App\Zoo\AnimalFactory;
use App\Zoo\animals\Animal;
use App\Zoo\animals\Cat;

/**
 * @class AnimalFactoryTest
 */
class AnimalFactoryTest extends \PHPUnit\Framework\TestCase
{
    protected $animalFactory;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->animalFactory = new AnimalFactory();
        parent::__construct($name, $data, $dataName);
    }

    public function testCreate()
    {
        self::assertInstanceOf('\App\Zoo\animals\Animal', $this->animalFactory->create('dog'));
        self::assertInstanceOf('\App\Zoo\animals\Cat', $this->animalFactory->create('cat'));
        self::expectException('\Exception');
        $this->animalFactory->create('chupakabra');
    }
}
