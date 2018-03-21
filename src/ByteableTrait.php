<?php

namespace Ajax\Zoo;

trait ByteableTrait
{
    /**
     * @param string $object
     */
    public function byte(string $object)
    {
        echo $this->name . ' has bitten ' . $object . PHP_EOL;
    }
}
