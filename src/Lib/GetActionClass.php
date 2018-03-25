<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class GetActionClass extends \LibFunction
{

    public function run($action, $object = null)
    {
        $action_method_name = $this->lib->getActionMethodName($action);
        $action_class_name = $this->lib->getActionClassName($object, $action_method_name);
        return $action_class_name;
    }

}