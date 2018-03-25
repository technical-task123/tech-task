<?php

namespace Entities;

use Entities\Traits\CanFlyTrait;
use Entities\Traits\CanTweetTrait;
use Entities\Traits\CanWalkTrait;

/**
 * Class Sparrow
 * @package Entities
 */
class Sparrow extends AbstractAnimal
{
    use CanWalkTrait, CanTweetTrait, CanFlyTrait;

    /**
     * Sparrow constructor.
     * @param string $food
     */
    public function __construct(string $food)
    {
        parent::__construct($food);
        
        $this->tweet();
        $this->fly();
    }
}