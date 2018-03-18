<?php

require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Sparrow.php';
require_once 'Rat.php';

foreach ([
    new Cat('Alfred'),
    new Dog('Boris'),
    new Sparrow('Christian'),
    new Rat('David'),
] as $animal) {
    /** @var Animal $animal */
    $animal->doStaff();
}
