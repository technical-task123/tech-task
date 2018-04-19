<?php

namespace Zoo\Action;

/**
 * Class AbstractAction
 * @package Zoo\Action
 */
abstract class AbstractAction implements ActionInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Eat constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}