<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 13:49
 */

namespace DanchukAS\AmadeusTechTask123;


abstract class AAction
{
    /**
     * @var \DanchukAS\AmadeusTechTask123\ILib
     */
    public $lib;

    public $runParam;

}