<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-27 17:39
 */

namespace DanchukAS\AmadeusTechTask123Test\Provider;


use DanchukAS\Test\Mock\NameQualifier;

class AnyClassNameProvider
{
    public static function getData()
    {
        $name_qualifier = new NameQualifier();

        $provider_data = [];
        foreach (TypeClassProvider::getData() as $name => $dataset) {
            [$class_name] = $dataset;
            $provider_data['fully qualified ' . $name] = [$name_qualifier->getFullyQualified($class_name)];
            $provider_data['qualified ' . $name] = [$name_qualifier->getQualified($class_name)];
        }

        return $provider_data;
    }
}