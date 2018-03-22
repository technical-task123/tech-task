<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 17:03
 */

namespace Lib\Scheme\Animal;


use Lib\Scheme\Animal\Ability\PiableInterface;
use Lib\Scheme\Animal\Ability\WalkableInterface;

class Rat extends Animal implements WalkableInterface, PiableInterface
{

}