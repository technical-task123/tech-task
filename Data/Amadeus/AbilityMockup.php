<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 22:51
 */

namespace Data\Amadeus;


class AbilityMockup
{
    public function __construct($object, ...$action_detail) {
        echo $object->name . ' ' . implode(' ', $action_detail) . PHP_EOL;
    }
}