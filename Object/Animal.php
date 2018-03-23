<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 19:09
 */
class Animal
{
    public $name;
    public $lifeCycle = EatLifeCycle::class;

    public function walk(Lib $f)
    {
        $f->walk($this);
    }
}