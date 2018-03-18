<?php

function __autoload($class_name)
{
    require_once $class_name . '.php';
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
