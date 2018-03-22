<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 22:36
 */

namespace Lib\Implementation\Animal\Ability;


use Lib\Scheme\Animal\Ability\WalkableInterface;

class Walk extends Ability
{
    /**
     * Walk constructor.
     *
     * @param $object
     * @param array $action_detail
     */
    public function __construct(WalkableInterface $object)
    {
        parent::__construct($object);
    }

    public function getName()
    {
        return 'walking';
    }
}