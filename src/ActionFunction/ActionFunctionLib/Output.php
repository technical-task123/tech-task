<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\ActionFunctionLib;


class Output extends \LibFunction
{

    public function run($action)
    {
        $object = $action->runParam->object;
        $action_name = $action->runParam->actionName;
        $action_param = $action->runParam->additionalParam;

        $message = $this->lib->getName($object) . ' ' . $action_name;

        if ($action_param !== null) {
            $message .= ' ' . implode(', ', $action_param);
        }

        $this->lib->base->output($message);
    }

}