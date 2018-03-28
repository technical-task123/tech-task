<?php
declare(strict_types=1);

use DanchukAS\AmadeusTechTask123\Action\Walk;

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:53
 */
class DogLifeCycle extends \EatLifeCycle
{
    public function run($object)
    {

        $run_param = $this->lib->createRunParam();
        $this->lib->setObject($run_param, $object);

        $action_list = [];
        $action_list[] = $this->lib->createAction($run_param, Walk::class);


        $this->lib->setName($run_param, 'run');
        $action_list[] = $this->lib->createAction($run_param);

        $this->lib->setName($run_param, 'wuf');
        $action_list[] = $this->lib->createAction($run_param);

        // @todo "byte -> has bitten" is not action, it is setState and trigger on setState
        $this->lib->setName($run_param, 'has bitten');
        $run_param->additionalParam = ['man'];
        $action_list[] = $this->lib->createAction($run_param);

        foreach ($action_list as $action) {
            $this->lib->runAction($action);
        }

        parent::run($object);
    }
}