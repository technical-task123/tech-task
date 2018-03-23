<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:29
 */

namespace DanchukAS\Implementation\Animal\Config;


use DanchukAS\Implementation\Animal\Ability\Meow;
use DanchukAS\Implementation\Animal\Ability\Walk;

final class CatConfig extends AnimalConfig
{
    public function __construct($name = null)
    {
        $this->abilityList = \array_merge([
            Walk::class => []
            , Meow::class => []
        ], $this->abilityList);

        parent::__construct($name);
    }

}