<?php

namespace Entities;

use Entities\Traits\CanSqueakTrait;
use Entities\Traits\CanWalkTrait;

/**
 * Class Rat
 * @package Entities
 */
class Rat extends AbstractAnimal
{
    use CanWalkTrait, CanSqueakTrait;

    public function __construct(string $food)
    {
        parent::__construct($food);

        $this->walk();
        $this->pi();
    }
}