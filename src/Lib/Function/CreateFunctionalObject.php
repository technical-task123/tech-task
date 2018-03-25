<?php
declare(strict_types=1);

namespace LibFunction;


class CreateFunctionalObject extends \LibFunction
{

    public function run($class = null)
    {
        $object = $this->lib->createObject($class);

        $this->lib->setLib($object, $this->lib);

        return $object;
    }

}