<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:34
 */

namespace Lib\Implementation\Animal\Config;


use Lib\Implementation\Animal\Ability\Run;
use Lib\Implementation\Animal\Ability\Walk;
use Lib\Implementation\Animal\Ability\Wuf;
use Lib\Implementation\Animal\Config;
use Lib\Implementation\LifeWay\Dog;

final class DogConfig extends Config\AnimalConfig
{
    public function __construct($name = null)
    {
        $this->lifeWay = $this->lifeWay ?? Dog::class;

        $this->abilityList = \array_merge([
            Walk::class => []
            , Run::class => []
            , Wuf::class => []
        ], $this->abilityList);

        parent::__construct($name);
    }

}