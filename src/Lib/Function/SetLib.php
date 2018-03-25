<?php
declare(strict_types=1);

namespace LibFunction;


class SetLib extends \LibFunction
{

    public function run($object, $lib)
    {
        $object->lib = $lib;
    }

}