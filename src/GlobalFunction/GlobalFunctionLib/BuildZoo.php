<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class BuildZoo extends \LibFunction
{

    public function run($animal_collection = null)
    {
        $zoo = $this->lib->createZoo();
        $this->lib->setAnimalCollection($zoo, $animal_collection);
        return $zoo;
    }

}