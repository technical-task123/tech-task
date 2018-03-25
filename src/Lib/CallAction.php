<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class CallAction extends \LibFunction
{

    /**
     * @param $object
     * @param string $action_name
     * @param array|null $action_param
     */
    public function run($object, string $action_name, array $action_param = null)
    {
        $class = $this->lib->getActionClass($action_name, $object);

        $run_param = [
            $action_name,
            $object,
            $action_param
        ];

        $this->lib->runNewAction($class, $run_param);
    }

}