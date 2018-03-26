<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib\Action;


use DanchukAS\AmadeusTechTask123\AAction;

class Walk extends \LibFunction
{

    public function run(AAction $action)
    {
        $this->lib->callAction($action->runParam->object, 'walking');
    }

}