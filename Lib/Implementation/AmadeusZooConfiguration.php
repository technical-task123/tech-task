<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:14
 */

namespace DanchukAS\Implementation;


use DanchukAS\Implementation\Animal\Config\CatConfig;
use DanchukAS\Implementation\Animal\Config\DogConfig;
use DanchukAS\Implementation\Animal\Config\RatConfig;
use DanchukAS\Implementation\Animal\Config\SparrowConfig;
use DanchukAS\Scheme\Animal\Cat;
use DanchukAS\Scheme\Animal\Dog;
use DanchukAS\Scheme\Animal\Rat;
use DanchukAS\Scheme\Animal\Sparrow;
use DanchukAS\Scheme\ZooConfiguration;

class AmadeusZooConfiguration extends ZooConfiguration
{
    public function __construct(array $animal_list = [])
    {
        $animal_list = \array_merge($animal_list, [
            new Cat(new CatConfig())
            , new Dog(new DogConfig())
            , new Sparrow(new SparrowConfig())
            , new Rat(new RatConfig())
        ]);

        parent::__construct($animal_list);
    }
}