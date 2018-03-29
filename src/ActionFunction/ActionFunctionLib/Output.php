<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\ActionFunctionLib;


class Output extends \LibFunction
{

    public function run($action)
    {
        $run_param = $this->lib->getRunParam($action);
        $object = $run_param->object;
        $action_name = $run_param->name;
        $action_param = $run_param->additionalParam ?? null;

        $message = $this->lib->getName($object) . ' ' . $action_name;

        if ($action_param !== null) {
            $message .= ' ' . implode(', ', $action_param);
        }

        $this->lib->output($message);
    }

}