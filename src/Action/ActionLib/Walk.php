<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 10:19
 */

namespace DanchukAS\AmadeusTechTask123\Action;

use DanchukAS\AmadeusTechTask123\Action;
use DanchukAS\AmadeusTechTask123\TAvailableWalk;

class Walk extends Action
{
    use \TNeedVerifyAvailable, TAvailableWalk;

    public $initializer = \DanchukAS\AmadeusTechTask123\Lib\Action\Walk::class;
}