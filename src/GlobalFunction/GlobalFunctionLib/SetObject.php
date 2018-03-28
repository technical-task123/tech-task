<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class SetObject extends \LibFunction
{

    public function run(\IHasObject $object, $propertyObject)
    {
        $object->object = $propertyObject;
    }

}