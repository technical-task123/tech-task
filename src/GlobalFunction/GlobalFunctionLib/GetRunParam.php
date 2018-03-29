<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class GetRunParam extends \LibFunction
{

    public function run(\IHasRunParam $object)
    {
        return $object->runParam;
    }

}