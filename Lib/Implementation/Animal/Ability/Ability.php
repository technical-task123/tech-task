<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 22:51
 */

namespace Lib\Implementation\Animal\Ability;


use Lib\Scheme\Animal\IName;

class Ability
{
    public function __construct(IName $object, ...$ability_detail_list)
    {
        array_unshift($ability_detail_list, $this->getName());
        echo $object->getName() . ' ' . implode(' ', $ability_detail_list) . PHP_EOL;
    }

    protected function getName()
    {
        $class_name = \get_called_class();
        // get main name of class without namespace.
        // Example: Dog from Lib\Implementation\Animal\Animal\Dog
        $class_name = \substr($class_name, \strrpos($class_name, '\\') + 1);

        return \lcfirst($class_name);
    }

}