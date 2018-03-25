<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 21:03
 */
class EatLifeCycle
{

    public static function run(Lib $f, $object)
    {
        $f->callAction($object, 'eat', ['food']);
    }
}