<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:52
 */

namespace Lib\Implementation\Animal;


use Lib\Implementation\Animal;
use Lib\Scheme\Ability\IPi;
use Lib\Scheme\Ability\IWalk;

final class Rat extends Animal implements IWalk, IPi
{

    public function lifeCycle() {
        $this->pi();

        parent::lifeCycle();
    }

}