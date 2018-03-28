<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class GetAnimalCollection extends \LibFunction
{

    public function run(\IHasAnimalCollection $object): array
    {
        return $object->animalCollection;
    }

}