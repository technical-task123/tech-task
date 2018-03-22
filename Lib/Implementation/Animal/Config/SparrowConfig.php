<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:39
 */

namespace Lib\Implementation\Animal\Config;


use Lib\Implementation\Animal\Ability\Fly;
use Lib\Implementation\Animal\Ability\Tweet;
use Lib\Implementation\Animal\Ability\Walk;
use Lib\Implementation\Animal\Config;

final class SparrowConfig extends Config\AnimalConfig
{
    public function __construct($name = null)
    {
        $this->abilityList = \array_merge([
            Walk::class => [],
            Tweet::class => [],
            Fly::class => []
        ], $this->abilityList);

        parent::__construct($name);
    }

}