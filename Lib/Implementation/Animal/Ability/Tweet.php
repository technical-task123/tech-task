<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 17:31
 */

namespace DanchukAS\Implementation\Animal\Ability;


use DanchukAS\Scheme\Animal\Ability\TweetableInterface;

class Tweet extends Ability
{
    public function __construct(TweetableInterface $object)
    {
        parent::__construct($object);
    }
}