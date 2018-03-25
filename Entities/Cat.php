<?php

namespace Entities;

use Entities\Traits\CanMeowTrait;
use Entities\Traits\CanWalkTrait;

/**
 * Class Cat
 * @package Entities
 */
class Cat extends AbstractAnimal
{
    use CanWalkTrait, CanMeowTrait;

    /**
     * Cat constructor.
     * @param string $food
     */
    public function __construct(string $food)
    {
        parent::__construct($food);

        $this->walk();
        $this->meow();
    }
}