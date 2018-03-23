<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 20:04
 */

namespace DanchukAS\Scheme;


abstract class AbstractZoo implements LiveableInterface
{
    protected $configuration;

    public function __construct(ZooConfiguration $config)
    {
        $this->configuration = $config;
    }

}