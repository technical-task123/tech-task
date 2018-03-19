<?php

namespace App\Zoo;

/**
 * Class Zoo
 *
 * @package App\Zoo
 */
class Zoo
{
    /**
     * Animals zoo list
     *
     * @var Animal[]
     */
    private $animals = [];

    /**
     * Free area for new animals (in some abstract limits)
     *
     * @var int
     */
    private $animalsFreeArea = 0;

    /**
     * Food reserve (for example in kilo)
     *
     * @var Food
     */
    private $foodReserve;

    /**
     * Zoo constructor.
     *
     * @param int  $animalsFreeArea
     * @param Food $foodReserve
     */
    public function __construct(int $animalsFreeArea, Food $foodReserve)
    {
        $this->animalsFreeArea = $animalsFreeArea;
        $this->foodReserve = $foodReserve;
    }

    /**
     * Get animals list
     *
     * @return Animal[]
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }

    /**
     * Add animal to zoo
     *
     * @param Animal $animal
     *
     * @throws \Exception
     */
    public function addAnimal(Animal $animal)
    {
        try {
            $this->validateFreeArea($animal);

            $this->validateFoodReserve($animal);

            $this->animals[] = $animal;

            $this->animalsFreeArea -= $animal->getAnimalSize();

            $this->foodReserve->decreaseSize($animal->getFoodRation()->getSize());

            output(sprintf('Animal %s was added to zoo!', $animal->getName()));
        } catch (\Exception $e) {
            output($e->getMessage());
        }
    }

    /**
     * Show animals details
     */
    public function showAnimalsList()
    {
        output('Animals list');

        foreach ($this->animals as $key => $animal) {
            output(
                sprintf(
                    '%d. %s: size - %d, food ration - %d',
                    $key + 1,
                    $animal->getName(),
                    $animal->getAnimalSize(),
                    $animal->getFoodRation()->getSize()
                )
            );
        }
    }

    /**
     * Validate if there is enough space for new animal
     *
     * @param Animal $animal
     *
     * @throws \Exception
     */
    private function validateFreeArea(Animal $animal)
    {
        if ($animal->getAnimalSize() > $this->animalsFreeArea) {
            throw new \Exception(
                sprintf('Not enough area for %s animal', $animal->getName())
            );
        }
    }

    /**
     * Validate if there is enough food for new animal
     *
     * @param Animal $animal
     *
     * @throws \Exception
     */
    private function validateFoodReserve(Animal $animal)
    {
        if ($animal->getFoodRation()->getSize() > $this->foodReserve->getSize()) {
            throw new \Exception(
                sprintf('Not enough food for %s animal!', $animal->getName())
            );
        }
    }
}