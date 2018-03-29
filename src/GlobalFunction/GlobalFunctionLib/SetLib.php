<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class SetLib extends \LibFunction
{

    public function run($object, $lib)
    {
        $object->lib = $lib;
    }

}