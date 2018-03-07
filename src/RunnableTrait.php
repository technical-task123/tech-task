<?php

namespace Ajax\Zoo;

trait RunnableTrait
{
    /**
     * @return void
     */
    public function run()
    {
        echo $this->name . ' is running' . PHP_EOL;
    }
}
