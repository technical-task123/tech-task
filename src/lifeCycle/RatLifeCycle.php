<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:53
 */
class RatLifeCycle extends EatLifeCycle
{
    public static function run(Lib $f, $object)
    {
        $f->callAction($object, 'pi');

        parent::run($f, $object);
    }
}