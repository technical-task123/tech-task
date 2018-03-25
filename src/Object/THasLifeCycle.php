<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 16:15
 */


/**
 * Trait THasLifeCycle
 *
 * @uses IHasLifeCycle as declaration for function's parameters
 */
trait THasLifeCycle
{
    /**
     * @var string Name of class.
     * @uses IHasLifeCycle::$lifeCycle
     */
    public $lifeCycle;
}