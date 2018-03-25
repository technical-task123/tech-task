<?php

require_once __DIR__ . '/vendor/autoload.php';

const FOOD = 'food';

$animalsStack = ['cat', 'dog', 'sparrow', 'rat'];

foreach ($animalsStack as $animal) {
    if ($animal === 'dog') {
        $dogInstance = Entities\AnimalFactory::makeAnimal($animal, FOOD);
        $dogInstance->bite('man');
    } else {
        Entities\AnimalFactory::makeAnimal($animal, FOOD);
    }
}