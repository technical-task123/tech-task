<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 16:14
 */


/**
 * Trait THasObject
 *
 * @uses IHasObject as declaration for function's parameters
 */
trait THasObject
{
    /**
     * @var mixed Any object.
     * @uses IHasObject::$object
     */
    public $object;
}