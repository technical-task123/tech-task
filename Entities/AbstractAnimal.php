<?php

namespace Entities;

/**
 * Class AbstractAnimal
 * @package Entities
 */
abstract class AbstractAnimal
{
    /**
     * @var string
     */
    public $name;

    /**
     * AbstractAnimal constructor.
     * @param string $food
     */
    public function __construct(string $food)
    {
        $this->name = (new \ReflectionClass($this))->getShortName();
        $this->eat($food);
    }

    /**
     * Eat action
     *
     * @param string $food
     * @return string
     */
    public function eat(string $food)
    {
        echo $this->name . ' eats ' . $food;
    }
}