<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:53
 */
class CatLifeCycle extends EatLifeCycle
{
    public static function run(Lib $f, $object)
    {
        $f->action($object, 'walk');
        $f->action($object, 'meow');

        parent::run($f, $object);
    }
}