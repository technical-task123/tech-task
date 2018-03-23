<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 17:32
 */

namespace DanchukAS\Implementation\Animal\Ability;


use DanchukAS\Scheme\Animal\Ability\FlyableInterface;

class Fly extends Ability
{
    public function __construct(FlyableInterface $object)
    {
        parent::__construct($object);
    }
}