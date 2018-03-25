<?php

namespace Entities\Traits;

/**
 * Class CanFlyTrait
 * @package Entities\Traits
 */
trait CanFlyTrait
{
    /**
     * Fly action
     */
    public function fly()
    {
        echo $this->name . ' fly';
    }
}