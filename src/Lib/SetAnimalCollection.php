<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class SetAnimalCollection extends \LibFunction
{

    public function run(\IHasAnimalCollection $object, $collection)
    {
        $object->animalCollection = $collection;
    }

}