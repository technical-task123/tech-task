<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 16:14
 */


/**
 * Trait THasName
 *
 * @uses IHasName as declaration for function's parameters
 */
trait THasName
{
    /**
     * @var string Any.
     * @uses IHasName::$name
     */
    public $name;
}