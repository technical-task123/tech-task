<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class CreateFunctionalObject extends \LibFunction
{

    public function run($class = null)
    {
        $object = $this->lib->createObject($class);

        $this->lib->setLib($object, $this->lib);

        return $object;
    }

}