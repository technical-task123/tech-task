<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-27 17:35
 */

namespace DanchukAS\AmadeusTechTask123Test\Provider;


use DanchukAS\Test\Mock\ClassNameGenerator;

class TypeClassProvider
{
    public static function getData()
    {
        $generator = new ClassNameGenerator();

        return [
            'declared class with namespace' => [$generator->getDeclaredClass()],
            'std class without namespace' => [$generator->getStd()],
            'anonymous class' => [$generator->getAnonymous()]
        ];
    }
}