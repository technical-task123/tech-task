<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class SetName extends \LibFunction
{

    public function run(\IHasName $object, $name)
    {
        $object->name = $name;
    }

}