<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


use DanchukAS\AmadeusTechTask123\RunParam;

class CreateRunParam extends \LibFunction
{

    public function run(string $class = null)
    {
        $class = $class ?? RunParam::class;
        return $this->lib->createObject($class);
    }

}