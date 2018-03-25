<?php

namespace Entities\Traits;

/**
 * Class CanSqueakTrait
 * @package Entities\Traits
 */
trait CanSqueakTrait
{
    /**
     * Squeak action
     */
    public function pi()
    {
        echo $this->name . ' pi';
    }
}