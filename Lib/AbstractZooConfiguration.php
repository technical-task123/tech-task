<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:51
 */

namespace Lib;


use Lib\Scheme\Animal\AnimalAbstract;

abstract class AbstractZooConfiguration implements ZooConfigurationInterface
{
    /**
     * @var \Lib\Scheme\Animal\AnimalAbstract[]
     */
    protected $animalList = [];

    public function getAnimalList()
    {
        return $this->animalList;
    }

}