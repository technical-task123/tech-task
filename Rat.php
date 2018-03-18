<?php

require_once 'Animal.php';

class Rat extends Animal
{
    public function pi(): void
    {
        $this->echo('pies');
    }

    public function doStaff(): void
    {
        parent::doStaff();
        $this->pi();
    }

    protected function getFullName(): string
    {
        return \sprintf('Rat %s', $this->getName());
    }
}
