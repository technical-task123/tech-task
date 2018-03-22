<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 10:39
 */

namespace Lib\Scheme\Animal;


use Lib\Implementation\LifeWay\AllAbility;
use Lib\LiveableInterface;
use Lib\Scheme\Ability\HasAbilityInterface;

abstract class AnimalAbstract implements IName, HasAbilityInterface, LiveableInterface
{
    public $abilityList = [];
    protected $name;
    protected $lifeWay = AllAbility::class;

    public function getName()
    {
        return $this->name;
    }

    public function getAbilityList(): array
    {
        return $this->abilityList;
    }

    public function live()
    {
        return new $this->lifeWay($this);
    }
}