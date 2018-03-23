<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 00:20
 */
class ZooLifeCycle
{
    public function run(Lib $f, Zoo $object)
    {

        foreach ($object->animalCollection as $animal) {
            $f->live($animal);
        }

    }
}