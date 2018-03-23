<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 17:26
 */

namespace DanchukAS\Scheme\Animal;


use DanchukAS\Scheme\Animal\Ability\FlyableInterface;
use DanchukAS\Scheme\Animal\Ability\TweetableInterface;
use DanchukAS\Scheme\Animal\Ability\WalkableInterface;

class Sparrow extends Animal implements WalkableInterface, FlyableInterface, TweetableInterface
{

}