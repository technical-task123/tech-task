<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 13:49
 */

namespace DanchukAS\AmadeusTechTask123;


abstract class AAction implements \IHasRunParam
{
    use \THasRunParam;

    /**
     * @todo IHasLib, THasLib
     * @var IGlobalFunctionLib
     */
    public $lib;


}