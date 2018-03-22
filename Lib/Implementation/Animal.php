<?php
declare(strict_types=1);

namespace Lib\Implementation;

use Lib\Implementation\Ability\Eat;
use Lib\Scheme\Ability\IEat;
use Lib\Scheme\Animal\AnimalAbstract;


/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:12
 */
class Animal extends AnimalAbstract implements IEat
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
        // Example: Dog from Lib\Implementation\Animal\Dog
        $class_name = \substr($class_name, \strrpos($class_name, '\\') + 1);

        return \lcfirst($class_name) . '#' . $generated_names;
    }

}