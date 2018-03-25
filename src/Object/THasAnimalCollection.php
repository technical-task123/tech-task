<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 16:14
 */


/**
 * Trait THasAnimalCollection
 *
 * @uses IHasAnimalCollection as declaration for function's parameters
 */
trait THasAnimalCollection
{
    /**
     * @var string Any.
     * @uses IHasAnimalCollection::$animalCollection
     */
    public $animalCollection;
}