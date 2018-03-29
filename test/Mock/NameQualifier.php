<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-27 10:22
 */

namespace DanchukAS\Test\Mock;


class NameQualifier
{
    public function getFullyQualified($name)
    {
        if ('\\' !== $name[0]) {
            $name = '\\' . $name;
        }

        return $name;
    }

    public function getQualified($name)
    {
        $name = \ltrim($name, '\\');

        return $name;
    }

    public function getUnqualified($name, $namespace)
    {
        $namespace = \str_replace('\\', '\\\\', $namespace);
        $name = \preg_replace("/\\?$namespace/", '', $name);

        return $name;
    }
}