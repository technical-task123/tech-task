<?php

namespace Animal;

use Animal\Ability\WalkingAnimalTrait;

class Sparrow extends Animal
{
    use WalkingAnimalTrait;

    public function tweet(): void
    {
        $this->echo('tweets');
    }

    public function fly(): void
    {
        $this->echo('flies');
    }

    public function doStuff(): void
    {
        parent::doStuff();
        $this->walk();
        $this->tweet();
        $this->fly();
    }

    protected function getFullName(): string
    {
        return \sprintf('Sparrow %s', $this->getName());
    }
}
