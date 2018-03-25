<?php

namespace Entities\Traits;

/**
 * Class CanBarkTrait
 * @package Entities\Traits
 */
trait CanBarkTrait
{
    /**
     * Wuf action
     */
    public function wuf()
    {
        echo $this->name . ' wuf';
    }
}