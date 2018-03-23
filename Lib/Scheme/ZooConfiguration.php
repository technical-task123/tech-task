<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:51
 */

namespace DanchukAS\Scheme;


class ZooConfiguration implements ZooConfigurationInterface
{
    /**
     * @var \DanchukAS\Scheme\Animal\Animal[]
     */
    protected $animalList;

    public function __construct(array $animal_list = [])
    {
        $this->animalList = $animal_list;
    }

    public function getAnimalList()
    {
        return $this->animalList;
    }

}