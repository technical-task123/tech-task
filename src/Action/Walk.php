<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 10:19
 */

namespace DanchukAS\AmadeusTechTask123\Action;

class Walk implements \IRunnable
{
    use \TNeedVerifyAvailable, \TAvailableWalk;

    public function run()
    {
        [$f, [, $object]] = \func_get_args();

        $f->callAction($object, 'walking');
    }
}