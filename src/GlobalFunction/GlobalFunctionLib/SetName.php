<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class SetName extends \LibFunction
{

    public function run(\IHasName $object, $name)
    {
        $object->name = $name;
    }

}