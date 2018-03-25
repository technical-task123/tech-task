<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 09:36
 */


/**
 * Class ALib
 */
abstract class ALib
{

    protected function getClassName($methodName)
    {
        return '\LibFunction\\' . ucfirst($methodName);
    }


}