<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class RunNewAction extends \LibFunction
{

    public function run($action_class, $run_param): void
    {
        $action = $this->lib->createFunctionalObject($action_class);
        $action->runParam = $run_param;
        $this->lib->runAction($action);
    }

}