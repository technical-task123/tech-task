<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 17:00
 */

namespace Lib\Scheme\Animal;

use Lib\Scheme\Animal\Ability\BeatableInterface;
use Lib\Scheme\Animal\Ability\RunableInterface;
use Lib\Scheme\Animal\Ability\WalkableInterface;
use Lib\Scheme\Animal\Ability\WufableInterface;

class Dog extends Animal implements WalkableInterface, RunableInterface, WufableInterface, BeatableInterface
{

}