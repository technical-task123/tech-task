<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class CreateZoo extends \LibFunction
{

    public function run($class = null)
    {
        $class = $class ?? \Zoo::class;
        $zoo = $this->lib->createObject($class);
        return $zoo;
    }

}