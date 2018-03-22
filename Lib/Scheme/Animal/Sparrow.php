<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 17:26
 */

namespace Lib\Scheme\Animal;


use Lib\Scheme\Animal\Ability\FlyableInterface;
use Lib\Scheme\Animal\Ability\TweetableInterface;
use Lib\Scheme\Animal\Ability\WalkableInterface;

class Sparrow extends Animal implements WalkableInterface, FlyableInterface, TweetableInterface
{

}