<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 11:20
 */

namespace DanchukAS\AmadeusTechTask123\Action;


use DanchukAS\AmadeusTechTask123\Action;

class Output extends Action
{
    function run($run_param)
    {
        [$action, $object, $action_param] = $run_param;

        $message = $this->lib->getName($object) . ' ' . $action;

        if ($action_param !== null) {
            $message .= ' ' . implode(', ', $action_param);
        }

        $this->lib->output($message);
    }
}