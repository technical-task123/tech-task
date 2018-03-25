<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class GetName extends \LibFunction
{

    public function run(\IHasName $object)
    {
        return $object->name;
    }

}