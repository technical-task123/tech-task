<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 20:53
 */
class DogLifeCycle extends \EatLifeCycle
{
    public function run($object)
    {
        $this->lib->callAction($object, 'walk');
        $this->lib->callAction($object, 'run');
        $this->lib->callAction($object, 'wuf');

        // @todo "byte -> has bitten" is not action, it is setState and trigger on setState
        $this->lib->callAction($object, 'has bitten', ['man']);

        parent::run($object);
    }
}