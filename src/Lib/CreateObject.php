<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class CreateObject extends \LibFunction
{

    public function run($class = null)
    {
        $class = (null === $class)
            ? \stdClass::class
            : '\\' . $class;

        return new $class();
    }

}