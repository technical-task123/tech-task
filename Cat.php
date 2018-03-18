<?php

class Cat extends WalkingAnimal
{
    public function meow(): void
    {
        $this->echo('meows');
    }

    public function doStuff(): void
    {
        parent::doStuff();
        $this->meow();
    }

    protected function getFullName(): string
    {
        return \sprintf('Cat %s', $this->getName());
    }
}
