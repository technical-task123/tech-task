<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class IsAvailableActionRun extends \LibFunction
{

    public function run($object, $action)
    {

        $available_run = true;
        $needVerifyAvailable = $action->needVerifyAvailable ?? false;
        if ($needVerifyAvailable) {
            $availableAbility = $this->lib->getAbilityForAction($action);
            $available_run = $object->$availableAbility ?? false;
        }

        return $available_run;
    }

}