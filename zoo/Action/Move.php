<?php

namespace Zoo\Action;

use Zoo\Animal\AbstractAnimal;

/**
 * Class Move
 * @package Zoo\Action
 */
class Move extends AbstractAction
{
    /**
     * @param AbstractAnimal $animal
     * @return string
     */
    public function act(AbstractAnimal $animal)
    {
        echo sprintf(' %s do move: %s ', get_class($animal), $this->name);

        return $this;
    }
}