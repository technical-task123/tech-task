<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 02:04
 */

namespace Lib\Implementation\LifeWay;

use Lib\Scheme\Ability\HasAbilityInterface;

class AllAbility
{
    public function __construct(HasAbilityInterface $object)
    {
        foreach ($object->getAbilityList() as $ability => $ability_detail_list) {
            new $ability($object, ...$ability_detail_list);
        }
    }
}