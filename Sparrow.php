<?php

require_once 'WalkingAnimal.php';

class Sparrow extends WalkingAnimal
{
    public function tweet(): void
    {
        $this->echo('tweets');
    }

    public function fly(): void
    {
        $this->echo('flies');
    }

    public function doStaff(): void
    {
        parent::doStaff();
        $this->tweet();
        $this->fly();
    }

    protected function getFullName(): string
    {
        return \sprintf('Sparrow %s', $this->getName());
    }
}
