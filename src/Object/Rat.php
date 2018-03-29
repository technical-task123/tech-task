<?php
declare(strict_types=1);

use DanchukAS\AmadeusTechTask123\TCanWalk;

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:23
 */
class Rat extends Animal
{
    use TCanWalk;

    public $lifeCycle = RatLifeCycle::class;

}