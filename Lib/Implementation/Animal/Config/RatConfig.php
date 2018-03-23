<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:52
 */

namespace DanchukAS\Implementation\Animal\Config;


use DanchukAS\Implementation\Animal\Ability\Pi;
use DanchukAS\Implementation\Animal\Config;

class RatConfig extends Config\AnimalConfig
{

    public function __construct($name = null)
    {
        $this->abilityList = \array_merge([
            Pi::class => []
        ], $this->abilityList);

        parent::__construct($name);
    }

}