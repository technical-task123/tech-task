<?php

class Rat extends Animal
{
    public function pi(): void
    {
        $this->echo('pies');
    }

    public function doStuff(): void
    {
        parent::doStuff();
        $this->pi();
    }

    protected function getFullName(): string
    {
        return \sprintf('Rat %s', $this->getName());
    }
}
