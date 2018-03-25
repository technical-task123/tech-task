<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 19:12
 *
 * @see \ILib
 */
class Lib extends ALib
{
    public function __call($methodName, $arguments)
    {
        $class = parent::getClassName($methodName);
        $function = new $class;
        $function->lib = $this;
        return $function->run(...$arguments);
    }
}