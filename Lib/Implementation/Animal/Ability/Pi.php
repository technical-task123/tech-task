<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 16:07
 */

namespace Lib\Implementation\Animal\Ability;


use Lib\Scheme\Animal\Ability\PiableInterface;

class Pi extends Ability
{
    public function __construct(PiableInterface $object)
    {
        parent::__construct($object);
    }
}