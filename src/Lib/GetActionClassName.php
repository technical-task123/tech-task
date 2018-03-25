<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class GetActionClassName extends \LibFunction
{

    public function run($object, $action_method_name): string
    {
        return $object->$action_method_name ?? \DanchukAS\AmadeusTechTask123\Action\UndefinedAction::class;
    }

}