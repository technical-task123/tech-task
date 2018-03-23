<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:16
 */
class Dog extends Animal implements IWalkable
{
    public $lifeCycle = DogLifeCycle::class;

}