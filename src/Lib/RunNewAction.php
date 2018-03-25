<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class RunNewAction extends \LibFunction
{

    public function run($action_class, $run_param): void
    {

        $action = $this->lib->createFunctionalObject($action_class);
        $this->lib->runAction($action, $run_param);
    }

}