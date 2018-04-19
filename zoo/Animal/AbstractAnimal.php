<?php

namespace Zoo\Animal;

use Ds\Set;
use Zoo\Action\ActionInterface;
use Zoo\Action\Eat;
use Zoo\Action\NotSupportedAction;

/**
 * Class AbstractAnimal
 * @package Zoo
 */
abstract class AbstractAnimal
{
    /**
     * @var Set
     */
    protected $actions;

    /**
     * @var Set
     */
    protected $supportedActions;

    /**
     * AbstractAnimal constructor.
     * @param Eat $eatAction
     * @param Set $supportedActions
     */
    public function __construct(Eat $eatAction, Set $supportedActions)
    {
        $this->actions = new Set();
        $this->actions->add($eatAction);

        $this->supportedActions = $supportedActions;
    }

    /**
     * @param ActionInterface $action
     * @return $this
     */
    public function addAction(ActionInterface $action)
    {
        $this->isSupportAction($action);

        $this->actions->add($action);

        return $this;
    }

    /**
     * @param ActionInterface $action
     * @return $this
     */
    public function removeAction(ActionInterface $action)
    {
        $this->actions->remove($action);

        return $this;
    }

    /**
     * @return $this
     */
    public function runActions()
    {
        /**
         * @var $action ActionInterface
         */
        foreach ($this->actions as $action) {
            $action->act($this);
        }

        return $this;
    }

    /**
     * @return Set
     */
    public function getSupportedActions(): Set
    {
        return $this->supportedActions;
    }

    /**
     * @param ActionInterface $action
     * @return bool
     * @throws NotSupportedAction
     */
    protected function isSupportAction(ActionInterface $action)
    {
        $supportedActions = $this->getSupportedActions();

        $name = get_class($action);

        if ($supportedActions->contains($name)) {
            return true;
        }

        throw new NotSupportedAction($this, $action);
    }
}