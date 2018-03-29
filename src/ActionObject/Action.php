<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 13:42
 */

namespace DanchukAS\AmadeusTechTask123;


use DanchukAS\AmadeusTechTask123\ActionFunctionLib\Output;

class Action extends AAction
{

    public function init()
    {
        $run_param = $this->lib->createRunParam();
        $this->lib->setRunParam($this, $run_param);

        $this->initializer = Output::class;
    }
}