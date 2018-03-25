<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 16:12
 */
abstract class AAnimal implements \IHasName, \IHasLifeCycle
{
    use THasName;
    use THasLifeCycle;
}