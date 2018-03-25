<?php

namespace Entities\Traits;

/**
 * Class CanMeowTrait
 * @package Entities\Traits
 */
trait CanMeowTrait
{
    /**
     * Meow action
     */
    public function meow()
    {
        echo $this->name . ' meow';
    }
}