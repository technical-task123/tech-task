<?php

namespace Ajax\Zoo;

trait FlyableTrait
{
    /**
     * @return void
     */
    public function fly()
    {
        echo $this->name . ' is flying' . PHP_EOL;
    }
}
