<?php declare(strict_types=1);

namespace TestTask\Entities;

use TestTask\Actions\WalkingTrait;

class Cat extends Animal
{
    use WalkingTrait;

    public function meow(): void
    {
        echo $this->getName() . ' meow' . PHP_EOL;
    }

    public function runAction(): void
    {
        $this->walk();
        $this->meow();
    }
}