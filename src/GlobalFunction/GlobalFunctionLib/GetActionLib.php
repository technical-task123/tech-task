<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


use DanchukAS\AmadeusTechTask123\ActionFunctionLib;

class GetActionLib extends \LibFunction
{

    public function run()
    {
        return $this->lib->createFunctionalObject(ActionFunctionLib::class);
    }

}