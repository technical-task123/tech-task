<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:51
 */

namespace Lib\Scheme;


abstract class AbstractZooConfiguration implements ZooConfigurationInterface
{
    /**
     * @var \Lib\Scheme\Animal\Animal[]
     */
    protected $animalList = [];

    public function getAnimalList()
    {
        return $this->animalList;
    }

}