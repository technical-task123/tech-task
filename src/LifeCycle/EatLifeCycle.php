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
        $this->lib->callAction($object, 'eat', ['food']);
    }
}