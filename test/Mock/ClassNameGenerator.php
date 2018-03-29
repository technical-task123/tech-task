<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-27 10:10
 */

namespace DanchukAS\Test\Mock;


class ClassNameGenerator
{
    public function getStd()
    {
        return \stdClass::class;
    }

    public function getAnonymous()
    {
        $object = new class
        {
        };

        return \get_class($object);
    }

    public function getDeclaredClass()
    {
        return DeclaredClass::class;
    }

}


