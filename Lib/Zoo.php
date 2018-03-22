<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:04
 */

namespace Lib;


class Zoo implements LiveableInterface
{
    protected $configuration;


    public function __construct(AbstractZooConfiguration $config)
    {
        $this->configuration = $config;
    }

    public function live()
    {

        foreach ($this->configuration->getAnimalList() as $animal) {
            $animal->live();
        }
    }

}