<?php

namespace Entities\Traits;

/**
 * Class CanRunTrait
 * @package Entities\Traits
 */
trait CanRunTrait
{
    /**
     * Run action
     */
    public function run()
    {
        echo $this->name . ' run';
    }
}