<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 22:51
 */

namespace DanchukAS\Implementation\Animal\Ability;


use DanchukAS\Scheme\Animal\Ability\AbstractAbility;
use DanchukAS\Scheme\Animal\NameableInterface;

class Ability extends AbstractAbility
{
    public function __construct(NameableInterface $object, ...$ability_detail_list)
    {
        $this->name = $this->getName() ?? $this->generateName();
        array_unshift($ability_detail_list, $this->getName());
        echo $object->getName() . ' ' . implode(' ', $ability_detail_list) . PHP_EOL;
    }

    protected function generateName()
    {
        $class_name = static::class;
        // get main name of class without namespace.
        // Example: Dog from DanchukAS\Implementation\Animal\Animal\Dog
        $class_name = \substr($class_name, \strrpos($class_name, '\\') + 1);

        return \lcfirst($class_name);
    }

}