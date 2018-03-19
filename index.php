<?php

// Include composer autoload file
require __DIR__ . '/vendor/autoload.php';

// Include used files
use App\Zoo\Aviaries\{
    CatsAviary, CrocodilesAviary, FliesAviary
};
use App\Zoo\Food;
use App\Zoo\VitalActivities\FlyingActivity;
use App\Zoo\VitalActivities\MovingActivity;
use App\Zoo\VitalActivities\SwimingActivity;
use App\Zoo\Zoo;

// Create zoo
$zoo = new Zoo(100, new Food(200));

try {
    // Add different animals to zoo
    $zoo->addAnimal(
        CatsAviary::makeWildCat('Wild Cat', 15, new Food(20))
    );
    $zoo->addAnimal(
        CatsAviary::makeFatPetCat('Fat Pet Cat', 45, new Food(40))
    );
    $zoo->addAnimal(
        CrocodilesAviary::makeAlligator('Alligator', 30, new Food(20))
    );
    $zoo->addAnimal(
        FliesAviary::makeTsetseFly('Tsetse Fly 1', 1, new Food(1))
    );
    $zoo->addAnimal(
        CrocodilesAviary::makeAlligator('Alligator 2', 50, new Food(38))
    );
    $zoo->addAnimal(
        FliesAviary::makeTsetseFly('Tsetse Fly 2', 2, new Food(2))
    );

    // Show animals list
    output();
    $zoo->showAnimalsList();

    // Show header for animals activity
    output();
    output('Animals activity');

    // Get animals
    $animals = $zoo->getAnimals();

    // Iterate over animals
    foreach ($animals as $key => $animal) {
        // Basic activities
        $animal->eat(
            new Food(
                ceil($animal->getFoodRation()->getSize() / 2)
            )
        );

        $animal->sound();

        $possibleVictimKey = rand(0, count($animals) - 1);
        if (isset($animals[$possibleVictimKey]) && $possibleVictimKey != $key) {
            $animal->attack($animals[$possibleVictimKey]);
        }

        $animal->sleep();

        $animal->defend();

        // Activities related to animals groups
        switch (true) {
            case $animal instanceof MovingActivity:
                $animal->walk();
                $animal->run();
                $animal->jump();
                break;
            case $animal instanceof FlyingActivity:
                $animal->fly();
                break;
            case $animal instanceof SwimingActivity:
                $animal->swim();
                $animal->dive();
                break;
            default:
                break;
        }
    }
} catch (\Exception $e) {
    output($e->getMessage());
}
