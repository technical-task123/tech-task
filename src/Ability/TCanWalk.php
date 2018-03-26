<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 09:39
 */


namespace DanchukAS\AmadeusTechTask123;


trait TCanWalk
{
    public $canWalk = true;
    public $walkMethod = \DanchukAS\AmadeusTechTask123\Action\Walk::class;
}