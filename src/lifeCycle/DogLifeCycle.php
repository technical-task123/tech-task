<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:53
 */
class DogLifeCycle extends EatLifeCycle
{
    public static function run(Lib $f, $object)
    {
        $f->callAction($object, 'walk');
        $f->callAction($object, 'run');
        $f->callAction($object, 'wuf');

        parent::run($f, $object);
    }
}