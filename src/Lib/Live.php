<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


class Live extends \LibFunction
{

    public function run($object)
    {
        $life_cycle_class = $this->lib->getLifeCycle($object);
        $life_cycle = $this->lib->base->createFunctionalObject($life_cycle_class);
        $life_cycle->run($object);
    }

}