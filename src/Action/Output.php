<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 11:20
 */

namespace DanchukAS\AmadeusTechTask123\Action;


class Output implements \IRunnable
{
    function run()
    {
        [$f, [$action, $object, $action_param]] = \func_get_args();

        $message = $f->getName($object) . ' ' . $action;

        if ($action_param !== null) {
            $message .= ' ' . $action_param;
        }

        $f->output($message);
    }
}