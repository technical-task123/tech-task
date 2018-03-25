<?php

namespace Entities;

use Entities\Traits\CanBarkTrait;
use Entities\Traits\CanBiteTrait;
use Entities\Traits\CanRunTrait;
use Entities\Traits\CanWalkTrait;

/**
 * Class Dog
 * @package Entities
 */
class Dog extends AbstractAnimal
{
    use CanWalkTrait, CanRunTrait, CanBarkTrait, CanBiteTrait;

    /**
     * Dog constructor.
     * @param string $food
     */
    public function __construct(string $food)
    {
        parent::__construct($food);

        $this->walk();
        $this->run();
        $this->wuf();
    }
}