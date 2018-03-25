<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class RunAction extends \LibFunction
{

    public function run(\IRunnable $action, $run_param)
    {

        $object = $run_param[1];
        if ($this->lib->isAvailableActionRun($object, $action)) {
            $action->run($run_param);
        } else {
            $message = \print_r($action, true) . ' is not allowed for ' . \print_r($object, true);
            \trigger_error($message, E_USER_NOTICE);
        }
    }

}