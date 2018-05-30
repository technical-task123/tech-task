<?php

namespace Test\Service;

use Test\Factory\AbstractAnimalFactory;
use Test\Model\AbstractAnimal;

/**
 * Class AnimalProvider
 * @package Test\Service
 */
class AnimalProvider
{
    /**
     * @var array
     */
    private $factories;

    /**
     * AnimalProvider constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param AbstractAnimalFactory $factory
     * @return AnimalProvider
     */
    public function addFactory(AbstractAnimalFactory $factory): AnimalProvider
    {
        $this->factories[] = $factory;

        return $this;
    }

    /**
     * @param string $animalType
     * @return AbstractAnimal
     * @throws \Exception
     */
    public function getAnimal(string $animalType): AbstractAnimal
    {
        if (!$this->factories) {
            throw new \Exception('Empty factories!');
        }
        $result = null;
        /** @var AbstractAnimalFactory $factory */
        foreach ($this->factories as $factory) {
            if ($animalType == $factory->getType()) {
                $result = $factory->getAnimal();
            }
        }

        return $result;
    }
}
