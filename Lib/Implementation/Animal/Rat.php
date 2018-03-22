<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:52
 */

namespace Lib\Implementation\Animal;


use Lib\Scheme\Animal\Ability\PiableInterface;
use Lib\Scheme\Animal\Ability\WalkableInterface;

final class Rat extends Animal implements WalkableInterface, PiableInterface
{

    public function lifeCycle()
    {
        $this->pi();

        parent::lifeCycle();
    }

}