<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 16:46
 */

namespace DanchukAS\Scheme\Animal;


use DanchukAS\Scheme\Animal\Ability\MeowableInterface;
use DanchukAS\Scheme\Animal\Ability\WalkableInterface;

class Cat extends Animal implements WalkableInterface, MeowableInterface
{


}