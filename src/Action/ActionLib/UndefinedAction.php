<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 15:17
 */

namespace DanchukAS\AmadeusTechTask123\Action;


use DanchukAS\AmadeusTechTask123\Action;

class UndefinedAction extends Action
{
    public function run($run_param)
    {
        $action = \ucfirst($run_param[0]);
        $action_class = __NAMESPACE__ . '\\' . $action;
        if (!class_exists($action_class)) {
            $action_class = Output::class;
        }

        $this->lib->runNewAction($action_class, $run_param);
    }
}