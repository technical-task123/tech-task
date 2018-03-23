<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:04
 */

namespace DanchukAS\Implementation;


use DanchukAS\Scheme\AbstractZoo;

class Zoo extends AbstractZoo
{
    public function live()
    {
        foreach ($this->configuration->getAnimalList() as $animal) {
            $animal->live();
        }
    }

}