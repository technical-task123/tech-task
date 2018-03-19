<?php

namespace Animal;

use Animal\Ability\WalkingAnimalTrait;

class Cat extends Animal
{
    use WalkingAnimalTrait;

    public function meow(): void
    {
        $this->echo('meows');
    }

    public function doStuff(): void
    {
        parent::doStuff();
        $this->walk();
        $this->meow();
    }

    protected function getFullName(): string
    {
        return \sprintf('Cat %s', $this->getName());
    }
}
