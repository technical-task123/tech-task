<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:14
 */

namespace Lib\Implementation;


use Lib\Implementation\Animal\Config\CatConfig;
use Lib\Implementation\Animal\Config\DogConfig;
use Lib\Implementation\Animal\Config\RatConfig;
use Lib\Implementation\Animal\Config\SparrowConfig;
use Lib\Scheme\AbstractZooConfiguration;
use Lib\Scheme\Animal\Cat;
use Lib\Scheme\Animal\Dog;
use Lib\Scheme\Animal\Rat;
use Lib\Scheme\Animal\Sparrow;

class ZooConfiguration extends AbstractZooConfiguration
{
    public function __construct()
    {
        $this->animalList = \array_merge($this->animalList, [
            new Cat(new CatConfig())
            , new Dog(new DogConfig())
            , new Sparrow(new SparrowConfig())
            , new Rat(new RatConfig())
        ]);
    }
}