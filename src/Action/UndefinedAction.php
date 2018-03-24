<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 15:17
 */

namespace DanchukAS\AmadeusTechTask123\Action;


class UndefinedAction implements \IRunnable
{
    public function run()
    {
        /** @var \Lib $f */
        [$f, $run_param] = \func_get_args();

        $action = \ucfirst($run_param[0]);
        $action_class = __NAMESPACE__ . '\\' . $action;
        if (!class_exists($action_class)) {
            $action_class = Output::class;
        }

        $f->runNewAction($action_class, $run_param);
    }
}