<?php

class Dog extends Animal
{
    use WalkingAnimalTrait;
    use RunningAnimalTrait;

    public function wuf(): void
    {
        $this->echo('wufs');
    }

    public function bite(string $object): void
    {
        $this->echo('bites %s', [$object]);
    }

    public function doStuff(): void
    {
        parent::doStuff();
        $this->walk();
        $this->run();
        $this->wuf();
        $this->bite('man');
    }

    protected function getFullName(): string
    {
        return \sprintf('Dog %s', $this->getName());
    }
}
