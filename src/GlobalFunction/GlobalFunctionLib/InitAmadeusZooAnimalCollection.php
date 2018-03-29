<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class InitAmadeusZooAnimalCollection extends \LibFunction
{

    public function run()
    {
        $animals = [
            $this->lib->createAnimal('cat', \Cat::class),
            $this->lib->createAnimal('dog', \Dog::class),
            $this->lib->createAnimal('sparrow', \Sparrow::class),
            $this->lib->createAnimal('rat', \Rat::class),
            $this->lib->createAnimal('monkey')
        ];

        return $animals;
    }

}