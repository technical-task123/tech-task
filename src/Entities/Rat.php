<?php declare(strict_types=1);

namespace TestTask\Entities;

class Rat extends Animal
{
    public function pi(): void
    {
        echo $this->getName() . ' pi' . PHP_EOL;
    }

    public function runAction(): void
    {
        $this->pi();
    }
}