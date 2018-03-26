<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


use DanchukAS\AmadeusTechTask123\AAction;

class RunAction extends \LibFunction
{

    public function run(AAction $action)
    {

        if ($this->lib->isAvailableActionRun($action)) {
            $initializer = $this->lib->base->createFunctionalObject($action->initializer);
            $initializer->run($action);
        } else {
            $message = 'Action "' . $action->runParam->actionName
                . '" is not available for run with next param: '
                . \print_r($action->runParam, true);
            \trigger_error($message, E_USER_NOTICE);
        }
    }

}