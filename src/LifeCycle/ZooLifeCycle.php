<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-24 00:20
 */
class ZooLifeCycle extends \ALifeCycle
{
    public function run($object)
    {
        $animal_collection = $this->lib->getAnimalCollection($object);
        foreach ($animal_collection as $animal) {
            $this->lib->live($animal);
        }
    }
}