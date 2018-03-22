<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 12:24
 */

namespace Lib\Implementation\LifeWay;


use Lib\Implementation\Animal\Ability\Beat;
use Lib\Implementation\Animal\Ability\Eat;
use Lib\Implementation\Animal\Man;
use Lib\Scheme\Animal\Ability\HasAbilityInterface;

class Dog
{
    public function __construct(HasAbilityInterface $object)
    {
        foreach ($object->getAbilityList() as $ability => $ability_detail_list) {
            if ($ability === Eat::class) {
                new Beat(new Man(), $object);
            }
            new $ability($object, ...$ability_detail_list);
        }
    }
}