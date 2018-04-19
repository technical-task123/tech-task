<?php

namespace Zoo\Action;

use Zoo\Animal\AbstractAnimal;

/**
 * Class NotSupportedAction
 * @package Zoo\Action
 */
class NotSupportedAction extends \Exception
{
    /**
     * @var AbstractAnimal
     */
    protected $animal;

    /**
     * @var ActionInterface
     */
    protected $action;

    /**
     * NotSupportedAction constructor.
     * @param AbstractAnimal  $animal
     * @param ActionInterface $action
     */
    public function __construct(AbstractAnimal $animal, ActionInterface $action)
    {
        $this->animal = $animal;
        $this->action = $action;

        $format = 'Class %s not support action %s';

        $this->message = sprintf($format, get_class($animal), get_class($action));
    }
}