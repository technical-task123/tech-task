<?php declare(strict_types=1);

namespace TestTask\Entities;

use TestTask\Actions\WalkingTrait;

class Sparrow extends Animal
{
    use WalkingTrait;

    public function tweet(): void
    {
        echo $this->getName() . ' tweet' . PHP_EOL;
    }

    public function fly(): void
    {
        echo $this->getName() . ' fly' . PHP_EOL;
    }

    public function runAction(): void
    {
        $this->walk();
        $this->tweet();
        $this->fly();
    }
}