<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class GetActionMethodName extends \LibFunction
{

    public function run($action): string
    {
        return $action . 'Method';
    }

}