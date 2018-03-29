<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 16:14
 */


/**
 * Trait THasRunParam
 *
 * @uses IHasRunParam as declaration for function's parameters
 */
trait THasRunParam
{
    /**
     * @var \ARunParam Any.
     * @uses IHasRunParam::$runParam
     */
    public $runParam;
}