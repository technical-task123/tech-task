<?php

require_once 'WalkingAnimal.php';

class Cat extends WalkingAnimal
{
    public function meow(): void
    {
        $this->echo('meows');
    }

    public function doStaff(): void
    {
        parent::doStaff();
        $this->meow();
    }

    protected function getFullName(): string
    {
        return \sprintf('Cat %s', $this->getName());
    }
}
