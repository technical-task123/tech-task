<?php declare(strict_types=1);

namespace TestTask\Actions;

trait RunningTrait
{
    public function run()
    {
        echo $this->getName() . ' run' . PHP_EOL;
    }
}
