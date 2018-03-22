<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 23:11
 */

namespace Lib\Implementation\Ability;


use Lib\Scheme\Ability\IMeow;

class Meow extends Ability
{
    public function __construct(IMeow $object)
    {
        parent::__construct($object);
    }
}