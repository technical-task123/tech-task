<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-22 12:09
 */

namespace Lib\Implementation\Ability;


use Lib\Scheme\Ability\BeatableInterface;

class Beat extends Ability
{
    public function __construct(BeatableInterface $object, $subject)
    {
        parent::__construct($subject, $object->getName());
    }

    public function getName()
    {
        return 'has bitten';
    }
}