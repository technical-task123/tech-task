<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;

use DanchukAS\AmadeusTechTask123\Action\UndefinedAction;

class GetActionClassName extends \LibFunction
{

    public function run($object, $action_method_name): string
    {
        /** @noinspection PhpVariableVariableInspection */
        return $object->$action_method_name ?? UndefinedAction::class;
    }

}