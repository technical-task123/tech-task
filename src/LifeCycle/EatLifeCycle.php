<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 21:03
 */
class EatLifeCycle extends \ALifeCycle
{

    public function run($object)
    {
        $run_param = $this->lib->createRunParam();
        $this->lib->setObject($run_param, $object);

        // @todo
        $this->lib->setName($run_param, 'eat');
        $run_param->additionalParam = ['food'];
        $action = $this->lib->createAction($run_param);

        $this->lib->runAction($action);
    }
}