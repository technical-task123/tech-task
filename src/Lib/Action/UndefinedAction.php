<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib\Action;


use DanchukAS\AmadeusTechTask123\AAction;

class UndefinedAction extends \LibFunction
{

    public function run(AAction $action)
    {
        $action_name = $action->runParam->actionName;
        $action_class = '\DanchukAS\AmadeusTechTask123\Action\\' . \ucfirst($action_name);
        if (!class_exists($action_class)) {
            $action_class = \DanchukAS\AmadeusTechTask123\Action\Output::class;
        }

        $this->lib->runNewAction($action_class, $action->runParam);
    }

}