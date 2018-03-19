<?php

use Animal\Animal;
use Animal\Cat;
use Animal\Dog;
use Animal\Rat;
use Animal\Sparrow;

function __autoload($class_name)
{
    require_once \str_replace('\\', '/', $class_name) . '.php';
}

foreach ([
    new Cat('Alfred'),
    new Dog('Boris'),
    new Sparrow('Christian'),
    new Rat('David'),
] as $animal) {
    /** @var Animal $animal */
    $animal->doStuff();
}
