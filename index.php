<?php

use Ajax\Zoo\AnimalFactory;

require 'vendor/autoload.php';

foreach(AnimalFactory::getKnownAnimals() as $animalName) {
    $animal = AnimalFactory::getAnimal($animalName);
    $animal->interact();
    $animal->eat('food');
    $animal->makeSound();
}
