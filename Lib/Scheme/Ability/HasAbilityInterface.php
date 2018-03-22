<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 11:28
 */

namespace Lib\Scheme\Ability;


interface HasAbilityInterface
{
    /**
     * @return callable[]
     */
    public function getAbilityList(): array;
}