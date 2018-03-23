<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 12:09
 */

namespace DanchukAS\Implementation\Animal\Ability;


use DanchukAS\Scheme\Animal\Ability\BeatableInterface;

class Beat extends Ability
{
    public function __construct(BeatableInterface $object, $subject)
    {
        $this->name = $this->getName() ?? 'has bitten';
        parent::__construct($subject, $object->getName());
    }

}