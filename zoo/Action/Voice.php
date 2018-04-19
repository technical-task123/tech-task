<?php

namespace Zoo\Action;

use Zoo\Animal\AbstractAnimal;

/**
 * Class Eat
 * @package Zoo\Action
 */
class Voice extends AbstractAction
{
    /**
     * @param AbstractAnimal $animal
     * @return string
     */
    public function act(AbstractAnimal $animal)
    {
        echo sprintf(' %s make voice: %s ', get_class($animal), $this->name);

        return $this;
    }
}