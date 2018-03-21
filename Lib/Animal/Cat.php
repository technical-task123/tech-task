<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:29
 */

namespace Lib\Animal;


use Lib\Ability\IMeow;
use Lib\Ability\IWalk;

final class Cat extends Animal implements IWalk, IMeow
{
    protected $name = 'cat';

    public function lifeCycle() {
        $this->walk();
        $this->meow();

        parent::lifeCycle();
    }
}