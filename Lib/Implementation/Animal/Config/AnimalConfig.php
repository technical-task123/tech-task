<?php
declare(strict_types=1);

namespace Lib\Implementation\Animal\Config;

use Lib\Implementation\Animal\Ability\Eat;
use Lib\Implementation\LifeWay\AllAbility;
use Lib\Scheme\Animal\Ability\EatInterface;
use Lib\Scheme\Animal\AnimalConfigAbstract;


/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:12
 */
class AnimalConfig extends AnimalConfigAbstract implements EatInterface
{

    public function __construct($name = null)
    {
        $this->lifeWay = $this->lifeWay ?? AllAbility::class;
        $this->name = $name ?? $this->generateName();
        $this->abilityList = \array_merge([
            Eat::class => ['food']
        ], $this->abilityList);
    }

    /**
     * For automate set names to new Animals.
     *
     * @return string
     */
    protected function generateName()
    {
        static $generated_names = 0;

        $generated_names++;

        $name = static::class;
        // get main name of class without namespace.
        // Example: WalkConfig from Lib\Implementation\Animal\Ability\WalkConfig
        $name = \substr($name, \strrpos($name, '\\') + 1);
        // cut suffix Config. Example: Walk from WalkConfig
        $name = \str_replace('Config', '', $name);

        return \lcfirst($name) . '#' . $generated_names;
    }

}