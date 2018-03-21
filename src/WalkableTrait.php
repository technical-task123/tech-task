<?php

namespace Ajax\Zoo;

trait WalkableTrait
{
    /**
     * @return void
     */
    public function walk()
    {
        echo $this->name . ' is walking' . PHP_EOL;
    }
}
