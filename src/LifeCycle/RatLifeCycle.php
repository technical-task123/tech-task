<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:53
 */
class RatLifeCycle extends \EatLifeCycle
{
    public function run($object)
    {
        $run_param = $this->lib->createRunParam();
        $this->lib->setObject($run_param, $object);
        $this->lib->setName($run_param, 'pi');
        $action = $this->lib->createAction($run_param);
        $this->lib->runAction($action);

        parent::run($object);
    }
}