<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


use DanchukAS\AmadeusTechTask123\AAction;

class RunAction extends \LibFunction
{

    public function run(AAction $action)
    {
        if (!$this->lib->isAvailableActionRun($action)) {
            $message = 'Action "' . $action->runParam->name
                . '" is not available for run with next param: '
                . \print_r($action->runParam, true);
            \trigger_error($message, E_USER_NOTICE);
            return;
        }

        $initializer = $this->lib->createFunctionalObject($action->initializer);
        $initializer->run($action);
    }

}