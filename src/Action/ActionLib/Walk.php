<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 10:19
 */

namespace DanchukAS\AmadeusTechTask123\Action;

use DanchukAS\AmadeusTechTask123\Action;

class Walk extends Action
{
    use \TNeedVerifyAvailable, \TAvailableWalk;

    public function run($run_param)
    {
        [, $object] = $run_param;

        $this->lib->callAction($object, 'walking');
    }
}