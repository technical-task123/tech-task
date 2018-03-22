<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 23:22
 */

namespace Lib\Implementation\Ability;

use Lib\Scheme\Ability\IWuf;

class Wuf extends Ability
{
    public function __construct(IWuf $object)
    {
        parent::__construct($object);
    }
}