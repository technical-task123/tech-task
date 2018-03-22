<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 16:46
 */

namespace Lib\Scheme\Animal;


use Lib\Scheme\Animal\Ability\MeowableInterface;
use Lib\Scheme\Animal\Ability\WalkableInterface;

class Cat extends Animal implements WalkableInterface, MeowableInterface
{


}