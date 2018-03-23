<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 23:11
 */

namespace DanchukAS\Implementation\Animal\Ability;


use DanchukAS\Scheme\Animal\Ability\MeowableInterface;

class Meow extends Ability
{
    public function __construct(MeowableInterface $object)
    {
        parent::__construct($object);
    }
}