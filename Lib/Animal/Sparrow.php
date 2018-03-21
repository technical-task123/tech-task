<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:39
 */

namespace Lib\Animal;


final class Sparrow extends Animal
{
    protected $name = 'sparrow';

    public function fly()
    {
        echo $this->name . ' fly';
    }


    public function lifeCycle()
    {
        $this->walk();
        $this->tweet();
        $this->fly();

        parent::lifeCycle();
    }

}