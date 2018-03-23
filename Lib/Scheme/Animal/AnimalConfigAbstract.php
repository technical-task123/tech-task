<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 10:39
 */

namespace DanchukAS\Scheme\Animal;


use DanchukAS\Scheme\Animal\Ability\HasAbilityInterface;


abstract class AnimalConfigAbstract implements NameableInterface, HasAbilityInterface
{
    protected $abilityList = [];
    protected $name;
    protected $lifeWay;

    public function getName()
    {
        return $this->name;
    }

    public function getAbilityList(): array
    {
        return $this->abilityList;
    }

    public function getLifeWay()
    {
        return $this->lifeWay;
    }

}