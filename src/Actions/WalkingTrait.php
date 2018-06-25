<?php declare(strict_types=1);

namespace TestTask\Actions;

trait WalkingTrait
{
    public function walk(): void
    {
        echo $this->getName() . ' walk' . PHP_EOL;
    }
}