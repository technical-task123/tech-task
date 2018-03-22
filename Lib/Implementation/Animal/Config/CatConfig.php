<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:29
 */

namespace Lib\Implementation\Animal\Config;


use Lib\Implementation\Animal\Ability\Meow;
use Lib\Implementation\Animal\Ability\Walk;

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