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
        $this->lib->callAction($object, 'pi');

        parent::run($object);
    }
}