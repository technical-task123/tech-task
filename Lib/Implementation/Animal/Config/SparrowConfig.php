<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:39
 */

namespace DanchukAS\Implementation\Animal\Config;


use DanchukAS\Implementation\Animal\Ability\Fly;
use DanchukAS\Implementation\Animal\Ability\Tweet;
use DanchukAS\Implementation\Animal\Ability\Walk;
use DanchukAS\Implementation\Animal\Config;

final class SparrowConfig extends Config\AnimalConfig
{
    public function __construct($name = null)
    {
        $this->abilityList = \array_merge([
            Walk::class => [],
            Tweet::class => [],
            Fly::class => []
        ], $this->abilityList);

        parent::__construct($name);
    }

}