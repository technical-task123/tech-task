<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 12:24
 */

namespace DanchukAS\Implementation\LifeWay;


use DanchukAS\Implementation\Animal\Ability\Beat;
use DanchukAS\Implementation\Animal\Ability\Eat;
use DanchukAS\Implementation\Animal\Config\ManConfig;
use DanchukAS\Scheme\Animal\Ability\HasAbilityInterface;
use DanchukAS\Scheme\Animal\Man;

class Dog
{
    public function __construct(HasAbilityInterface $object)
    {
        foreach ($object->getAbilityList() as $ability => $ability_detail_list) {
            if ($ability === Eat::class) {
                $man = new Man(new ManConfig());
                new Beat($man, $object);
            }
            new $ability($object, ...$ability_detail_list);
        }
    }
}