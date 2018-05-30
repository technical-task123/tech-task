<?php

namespace Test;

use Test\Enum\AnimalType;
use Test\Factory\CatFactory;
use Test\Factory\DogFactory;
use Test\Factory\RatFactory;
use Test\Factory\SparrowFactory;
use Test\Model\AbstractAnimal;
use Test\Service\AnimalFacade;
use Test\Service\AnimalProvider;

/**
 * Class App
 * @package Test
 */
class App
{
    /**
     * app run
     */
    public function run()
    {
        $animalProvider = new AnimalProvider();
        $animalProvider
            ->addFactory(new CatFactory())
            ->addFactory(new DogFactory())
            ->addFactory(new SparrowFactory())
            ->addFactory(new RatFactory());

        $animals = [
            $animalProvider->getAnimal(AnimalType::RAT),
            $animalProvider->getAnimal(AnimalType::DOG),
            $animalProvider->getAnimal(AnimalType::CAT),
            $animalProvider->getAnimal(AnimalType::SPARROW),
        ];

        $animalFacade = new AnimalFacade();
        /** @var AbstractAnimal $animal */
        foreach ($animals as $animal) {
            if ($animal instanceof AbstractAnimal) {
                $animalFacade->sound($animal);
                $animalFacade->move($animal);
                $animalFacade->eat($animal);
            }
        }
    }
}
