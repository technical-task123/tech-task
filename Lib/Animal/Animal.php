<?php
declare(strict_types=1);

namespace Lib\Animal;


use Lib\Ability\IWalk;

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:12
 */
class Animal
{
    protected $name = 'animal';

    public function __construct($name = null)
    {
        $this->name = $name ?? $this->generateName();
    }

    public function generateName() {
        static $generated_names = 0;

        $generated_names++;

        return $this->name . '#' . $generated_names;
    }

    public function walk()
    {
        if ($this instanceof IWalk) {
            $this->action('walking');
        }
    }

    public function lifeCycle() {
        $this->eat('food');
    }

    public function action(...$action_detail) {
        echo $this->name . ' ' . implode(' ', $action_detail) . PHP_EOL;
    }


    /**
     * @todo: If actions must be hardcore defined
     * then delete this method, and restore method run.
     *
     * @param $action
     * @param $action_detail
     */
    public function __call($action, $action_detail)
    {
        $ability = "\Lib\Ability\I" . ucfirst($action);
        if ($this instanceof $ability) {

            // @todo: if project need only notice about undefined action
            // then delete next command, and restore methods Dog::run, Cat::meow.
            $this->action($action, ...$action_detail);

//            // @todo: if project need dynamic actions
//            // then delete next command.
//            trigger_error(get_called_class() . '::' . $action . ' is not defined!', E_USER_NOTICE);
        } else {
            $message = get_called_class() . '::' . $action . ' is not available!'
                . ' Add implementation of interface ' . $ability . ' to ' . get_called_class() . '.';
            trigger_error($message, E_USER_NOTICE);
        }
    }

}