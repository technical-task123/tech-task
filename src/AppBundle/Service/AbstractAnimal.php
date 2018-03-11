<?php

namespace AppBundle\Service;

/**
 * Class AbstractAnimal
 * @package AppBundle\Service
 */
abstract class AbstractAnimal
{
    /**
     * @var $name
     */
    protected $name;

    /**
     * @var $sound
     */
    protected $sound;

    /**
     * Set animal name
     *
     * @param string $name
     * @return AbstractAnimal
     */
    public function setName(string $name): AbstractAnimal
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get animal name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set animal sound
     *
     * @param string $sound
     * @return AbstractAnimal
     */
    public function setSound(string $sound): AbstractAnimal
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * Get animal sound
     *
     * @return string
     */
    public function getSound(): string
    {
        return $this->sound;
    }

    /**
     * Get what the animal eats
     *
     * @param string $food
     * @return void
     */
    public function eat(string $food): void
    {
        echo $this->getName() . ' eat ' . $food . PHP_EOL;
    }
}