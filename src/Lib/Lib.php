<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 19:12
 */
class Lib
{
    public function __call($name, $arguments)
    {
        $class = '\LibFunction\\' . ucfirst($name);
        $function = new $class;
        $function->lib = $this;
        return $function->run(...$arguments);
    }
}