<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 18:36
 */

namespace Lib\Scheme\Animal\Ability;


abstract class AbstractAbility implements AbilityInterface
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }
}