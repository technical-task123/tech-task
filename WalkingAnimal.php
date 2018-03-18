<?php

require_once 'Animal.php';

abstract class WalkingAnimal extends Animal
{
    public function walk(): void
    {
        $this->echo('walks');
    }

    public function doStaff(): void
    {
        parent::doStaff();
        $this->walk();
    }
}
