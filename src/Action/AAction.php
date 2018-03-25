<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 13:49
 */

namespace DanchukAS\AmadeusTechTask123;


abstract class AAction implements \IRunnable
{
    /**
     * @var \ILib
     */
    public $lib;

    public function run($run_param)
    {
    }
}