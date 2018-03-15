<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

$animalTypes = [
    'cat',
    'dog',
    'sparrow',
    'rat',
    'dragon'/*non-existent class*/];
$animals = [];

foreach ($animalTypes as $type) {
    try {
        $animals[] = Zoo\AnimalFactory::getInstance($type);
    } catch (\InvalidArgumentException $exception) {
        echo $exception->getMessage() . '<br>';
    }
}

$expected = \Zoo\Cat::class;
$actual = get_class(\Zoo\AnimalFactory::getInstance('Cat'));

var_dump($expected);
var_dump($actual);


foreach ($animals as $animal) {

    switch (strtolower($animal->getName())) {
        case 'cat':
            $animal->walk();
            $animal->meow();
            break;
        case 'dog':
            $animal->walk();
            $animal->run();
            $animal->wuf();
            $animal->bite('man');
            break;
        case 'sparrow':
            $animal->walk();
            $animal->tweet();
            $animal->fly();
            break;
        case 'rat':
            $animal->pi();
            break;
    }
    $animal->eat('food');
}