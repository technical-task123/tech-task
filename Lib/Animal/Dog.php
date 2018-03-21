<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:34
 */

namespace Lib\Animal;


use Lib\Ability\IRun;
use Lib\Ability\IWalk;
use Lib\Ability\IWuf;

final class Dog extends Animal implements IWalk, IRun, IWuf
{
    protected $name = 'dog';

    public function byte($object)
    {
        $this->action('has bitten', $object);
    }


    public function lifeCycle()
    {
        $this->walk();
        $this->run();
        $this->wuf();
        $this->byte('man');

        parent::lifeCycle();
    }

}