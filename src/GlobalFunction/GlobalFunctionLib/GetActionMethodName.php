<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class GetActionMethodName extends \LibFunction
{

    public function run($action): string
    {
        return $action . 'Method';
    }

}