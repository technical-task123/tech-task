<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:14
 */

namespace Lib\Implementation;


use Lib\Implementation\Animal\Cat;
use Lib\Implementation\Animal\Dog;
use Lib\Implementation\Animal\Rat;
use Lib\Implementation\Animal\Sparrow;
use Lib\Scheme\AbstractZooConfiguration;

class ZooConfiguration extends AbstractZooConfiguration
{
    public function __construct()
    {
        $this->animalList = \array_merge($this->animalList, [
            new Cat()
            , new Dog()
            , new Sparrow()
            , new Rat()
        ]);
    }
}