<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 17:00
 */

namespace DanchukAS\Scheme\Animal;

use DanchukAS\Scheme\Animal\Ability\BeatableInterface;
use DanchukAS\Scheme\Animal\Ability\RunableInterface;
use DanchukAS\Scheme\Animal\Ability\WalkableInterface;
use DanchukAS\Scheme\Animal\Ability\WufableInterface;

class Dog extends Animal implements WalkableInterface, RunableInterface, WufableInterface, BeatableInterface
{

}