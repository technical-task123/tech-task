<?php

abstract class WalkingAnimal extends Animal
{
    public function walk(): void
    {
        $this->echo('walks');
    }

    public function doStuff(): void
    {
        parent::doStuff();
        $this->walk();
    }
}
