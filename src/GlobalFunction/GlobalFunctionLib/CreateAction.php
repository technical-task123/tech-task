<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


use DanchukAS\AmadeusTechTask123\Action;

class CreateAction extends \LibFunction
{

    public function run(\ARunParam $runParam, $class = null)
    {
        $class = $class ?? Action::class;
        $action = $this->lib->createFunctionalObject($class);
        $action->init();
        $this->lib->mergeRunParam($action, $runParam);
        return $action;
    }

}