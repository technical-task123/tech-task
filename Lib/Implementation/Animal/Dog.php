<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:34
 */

namespace Lib\Implementation\Animal;


use Lib\Implementation\Animal\Ability\Run;
use Lib\Implementation\Animal\Ability\Walk;
use Lib\Implementation\Animal\Ability\Wuf;
use Lib\Scheme\Animal\Ability\BeatableInterface;
use Lib\Scheme\Animal\Ability\RunableInterface;
use Lib\Scheme\Animal\Ability\WalkableInterface;
use Lib\Scheme\Animal\Ability\WufableInterface;

final class Dog extends Animal implements WalkableInterface, RunableInterface, WufableInterface, BeatableInterface
{
    protected $lifeWay = \Lib\Implementation\LifeWay\Dog::class;


    // todo: man beat dog, dog has bitten man

    public function __construct($name = null)
    {
        $this->abilityList = \array_merge($this->abilityList, [
            Walk::class => []
            , Run::class => []
            , Wuf::class => []
        ]);

        parent::__construct($name);
    }

    public function byte($object)
    {
        $this->action('has bitten', $object);
    }

}