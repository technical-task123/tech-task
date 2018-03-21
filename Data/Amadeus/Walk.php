<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 22:36
 */

namespace Data\Amadeus;


class Walk extends AbilityMockup
{
    /**
     * Walk constructor.
     *
     * @param $object
     * @param array $action_detail
     */
    public function __construct($object)
    {
        parent::__construct($object, 'walking');
    }
}