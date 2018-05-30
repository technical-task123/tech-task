<?php

namespace Test\Factory;

use Test\Model\AbstractAnimal;

/**
 * Class AbstractAnimalFactory
 */
interface AbstractAnimalFactory
{
    public function getType(): string;

    public function getAnimal(): AbstractAnimal;
}
