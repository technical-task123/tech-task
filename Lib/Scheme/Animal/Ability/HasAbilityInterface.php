<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 11:28
 */

namespace Lib\Scheme\Animal\Ability;


interface HasAbilityInterface
{
    /**
     * @return array
     */
    public function getAbilityList(): array;
}