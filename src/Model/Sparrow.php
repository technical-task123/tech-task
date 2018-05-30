<?php

namespace Test\Model;

use Test\AnimalsInterface\FlyableInterface;

/**
 * Class Sparrow
 * @package Test\Model
 */
class Sparrow extends AbstractAnimal implements FlyableInterface
{
    /**
     * fly
     * @return mixed
     */
    public function fly(): void
    {
        echo $this->getName() . ' fly';
    }
}
