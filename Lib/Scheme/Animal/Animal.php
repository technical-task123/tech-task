<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 16:27
 */

namespace Lib\Scheme\Animal;


use Lib\Scheme\Animal\Ability\EatInterface;
use Lib\Scheme\Animal\Ability\HasAbilityInterface;
use Lib\Scheme\LiveableInterface;

class Animal implements LiveableInterface, NameableInterface, HasAbilityInterface, EatInterface
{

    protected $config;

    public function __construct(AnimalConfigAbstract $config)
    {
        $this->config = $config;
    }

    public function getName()
    {
        return $this->config->getName();
    }

    public function live()
    {
        $life_way = $this->config->getLifeWay();

        return new $life_way($this);
    }

    public function getAbilityList(): array
    {
        return $this->config->getAbilityList();
    }


}