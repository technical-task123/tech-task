<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class GetLifeCycle extends \LibFunction
{

    public function run(\IHasLifeCycle $object)
    {
        return $object->lifeCycle;
    }

}