<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class IsAvailableActionRun extends \LibFunction
{

    public function run($action)
    {
        $available_run = true;
        $needVerifyAvailable = $action->needVerifyAvailable ?? false;
        if ($needVerifyAvailable) {
            $availableAbility = $this->lib->getAbilityForAction($action);
            $available_run = $action->runParam->object->$availableAbility ?? false;
        }

        return $available_run;
    }

}