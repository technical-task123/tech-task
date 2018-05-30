<?php

namespace Test\Model;

use Test\AnimalsInterface\WalkableInterface;

/**
 * Class Cat
 * @package Test\Model
 */
class Cat extends AbstractAnimal implements WalkableInterface
{
    /**
     * walk
     * @return mixed
     */
    public function walk(): void
    {
        echo $this->getName() . ' is walking';
    }
}
