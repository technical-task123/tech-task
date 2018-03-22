<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:29
 */

namespace Lib\Implementation\Animal;


use Lib\Implementation\Animal\Ability\Meow;
use Lib\Implementation\Animal\Ability\Walk;
use Lib\Scheme\Animal\Ability\MeowableInterface;
use Lib\Scheme\Animal\Ability\WalkableInterface;

final class Cat extends Animal implements WalkableInterface, MeowableInterface
{
    public $name = 'cat';

    public function __construct($name = null)
    {
        $ability_list = [
            Walk::class => [],
            Meow::class => []
        ];

        $this->abilityList = \array_merge($ability_list, $this->abilityList);

        parent::__construct($name);
    }

}