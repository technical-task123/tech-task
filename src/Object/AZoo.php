<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 16:18
 */
class AZoo implements \IHasAnimalCollection, \IHasLifeCycle
{
    use \THasAnimalCollection;
    use \THasLifeCycle;
}