<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class GetAbilityForAction extends \LibFunction
{

    public function run($action)
    {
        $ability = $action->availableAbility;
        return $ability;
    }

}