<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class CreateAnimal extends \LibFunction
{

    public function run($name, $class = \Animal::class)
    {

        $animal = $this->lib->createObject($class);
        $this->lib->setName($animal, $name);
        return $animal;
    }

}