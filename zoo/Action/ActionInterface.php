<?php

namespace Zoo\Action;

use Zoo\Animal\AbstractAnimal;

/**
 * Interface ActionInterface
 * @package Zoo\Action
 */
interface ActionInterface
{
    public function act(AbstractAnimal $animal);
}