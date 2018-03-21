<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:52
 */

namespace Lib\Animal;


use Lib\Ability\IPi;
use Lib\Ability\IWalk;

final class Rat extends Animal implements IWalk, IPi
{

    protected $name = 'rat';

    public function lifeCycle() {
        $this->pi();

        parent::lifeCycle();
    }

}