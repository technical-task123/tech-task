<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 01:26
 */

namespace Lib\Implementation\Ability;


use Lib\Scheme\Ability\IEat;

class Eat extends Ability
{
    public function __construct(IEat $object, ...$ability_detail_list)
    {
        parent::__construct($object, ...$ability_detail_list);
    }
}