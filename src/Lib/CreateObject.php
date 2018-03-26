<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class CreateObject extends \LibFunction
{

    public function run($class = null)
    {
        if (null === $class) {
            $class = \stdClass::class;
        }

        if ('\\' !== $class[0]) {
            $class = '\\' . $class;
        }

        return new $class();
    }

}