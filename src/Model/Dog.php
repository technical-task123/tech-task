<?php

namespace Test\Model;

use Test\AnimalsInterface\ByteableInterface;
use Test\AnimalsInterface\RunnableInterface;

/**
 * Class Dog
 * @package Test\Model
 */
class Dog extends AbstractAnimal implements RunnableInterface, ByteableInterface
{
    /**
     * byte
     * @param string $target
     * @return mixed
     */
    public function byte(string $target): void
    {
        echo $this->getName() . ' has bitten' . $target;
    }

    /**
     * run
     * @return mixed
     */
    public function run(): void
    {
        echo $this->getName() . ' run';
    }
}
