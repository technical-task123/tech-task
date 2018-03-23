<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 17:03
 */

namespace DanchukAS\Scheme\Animal;


use DanchukAS\Scheme\Animal\Ability\PiableInterface;
use DanchukAS\Scheme\Animal\Ability\WalkableInterface;

class Rat extends Animal implements WalkableInterface, PiableInterface
{

}