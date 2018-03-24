<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:22
 */
class Cat extends Animal
{
    use TCanWalk;

    public $lifeCycle = CatLifeCycle::class;

}