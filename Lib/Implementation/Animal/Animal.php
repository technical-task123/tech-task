<?php
declare(strict_types=1);

namespace Lib\Implementation\Animal;

use Lib\Implementation\Animal\Ability\Eat;
use Lib\Scheme\Animal\Ability\EatInterface;
use Lib\Scheme\Animal\AnimalAbstract;


/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:12
 */
class Animal extends AnimalAbstract implements EatInterface
{

    public function __construct($name = null)
    {
        $this->name = $name ?? $this->generateName();
        $this->abilityList[Eat::class] = ['food'];
    }

    protected function generateName()
    {
        static $generated_names = 0;

        $generated_names++;

        $class_name = \get_called_class();
        // get main name of class without namespace.
        // Example: Dog from Lib\Implementation\Animal\Animal\Dog
        $class_name = \substr($class_name, \strrpos($class_name, '\\') + 1);

        return \lcfirst($class_name) . '#' . $generated_names;
    }

}