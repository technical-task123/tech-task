<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 00:24
 */
class Zoo implements IhasAnimalCollection
{
    use ThasAnimalCollection;

    public $lifeCycle = ZooLifeCycle::class;
}