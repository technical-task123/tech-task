<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:14
 */

namespace Data\Amadeus;


use Lib\Animal\Cat;
use Lib\Animal\Dog;
use Lib\Animal\Rat;
use Lib\Animal\Sparrow;

class ZooConfiguration extends \Lib\ZooConfiguration
{
    public function __construct()
    {
        $this->animalList = [
            new Cat()
            , new Dog()
            , new Sparrow()
            , new Rat()
        ];
    }
}