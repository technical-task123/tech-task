<?php
declare(strict_types=1);

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

            $this->animalsFreeArea -= $animal->getSize();

            $this->foodReserve->decreaseSize($animal->getFoodRation()->getSize());

            output(sprintf('Animal %s was added to zoo!', $animal->getName()));
        } catch (\Exception $e) {
            output($e->getMessage());
        }
    }

    /**
     * Get animals total area
     *
     * @return int
     */
    public function getAnimalsTotalSize()
    {
        $result = 0;

        foreach ($this->animals as $animal) {
            $result += $animal->getSize();
        }

        return $result;
    }

    /**
     * Get animals total food ration
     *
     * @return int
     */
    public function getAnimalsTotalFoodRation()
    {
        $result = 0;

        foreach ($this->animals as $animal) {
            $result += $animal->getFoodRation()->getSize();
        }

        return $result;
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
        if ($animal->getSize() > $this->animalsFreeArea) {
            throw new \Exception(
                sprintf('Not enough area for %s animal!', $animal->getName())
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
