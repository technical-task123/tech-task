<?php

namespace Entities\Traits;

/**
 * Class CanByteTrait
 * @package Entities\Traits
 */
trait CanBiteTrait
{
    /**
     * Byte action
     * @param string $object
     */
    public function bite(string $object)
    {
        echo $this->name . ' has bitten ' . $object;
    }
}