<?php

class Rat extends Animal
{
    use RunningAnimalTrait;

    public function pi(): void
    {
        $this->echo('pies');
    }

    public function doStuff(): void
    {
        parent::doStuff();
        $this->run();
        $this->pi();
    }

    protected function getFullName(): string
    {
        return \sprintf('Rat %s', $this->getName());
    }
}
