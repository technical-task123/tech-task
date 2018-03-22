<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-21 16:34
 */

namespace Lib\Implementation\Animal;


use Lib\Implementation\Ability\Run;
use Lib\Implementation\Ability\Walk;
use Lib\Implementation\Ability\Wuf;
use Lib\Implementation\Animal;
use Lib\Scheme\Ability\BeatableInterface;
use Lib\Scheme\Ability\IRun;
use Lib\Scheme\Ability\IWalk;
use Lib\Scheme\Ability\IWuf;

final class Dog extends Animal implements IWalk, IRun, IWuf, BeatableInterface
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