<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class Output extends \LibFunction
{

    public function run($message)
    {
        echo $message . PHP_EOL;
    }

}