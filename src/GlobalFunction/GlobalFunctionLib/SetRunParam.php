<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class SetRunParam extends \LibFunction
{

    public function run(\IHasRunParam $object, \ARunParam $runParam)
    {
        $object->runParam = $runParam;
    }

}