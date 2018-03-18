<?php

require_once 'WalkingAnimal.php';

class Dog extends WalkingAnimal
{
    public function run(): void
    {
        $this->echo('runs');
    }

    public function wuf(): void
    {
        $this->echo('wufs');
    }

    public function bite(string $object): void
    {
        $this->echo('bites %s', [$object]);
    }

    public function doStaff(): void
    {
        parent::doStaff();
        $this->run();
        $this->wuf();
        $this->bite('man');
    }

    protected function getFullName(): string
    {
        return \sprintf('Dog %s', $this->getName());
    }
}
