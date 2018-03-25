<?php

namespace Entities\Traits;

/**
 * Class CanWalkTrait
 * @package Entities\Traits
 */
trait CanWalkTrait
{
    /**
     *  Walk action
     */
    public function walk()
    {
        echo $this->name . ' walking';
    }
}