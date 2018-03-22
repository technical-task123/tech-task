<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 23:21
 */

namespace Lib\Implementation\Ability;


use Lib\Scheme\Ability\IRun;


class Run extends Ability
{
    public function __construct(IRun $object)
    {
        parent::__construct($object);
    }
}