<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class RunAction extends \LibFunction
{

    public function run($action)
    {

        if ($this->lib->isAvailableActionRun($action)) {
            $initializer = $this->lib->createFunctionalObject($action->initializer);
            $initializer->run($action);
        } else {
            $message = \print_r($action, true) . ' is not allowed with ' . \print_r($action->runParam, true);
            \trigger_error($message, E_USER_NOTICE);
        }
    }

}