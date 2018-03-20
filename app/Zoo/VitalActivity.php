<?php
declare(strict_types=1);

namespace App\Zoo;

/**
 * Interface VitalActivity
 *
 * @package App\Zoo
 */
interface VitalActivity
{
    /**
     * Animal "eating" status
     *
     * @var string
     */
    public const STATUS_EAT = 'eats';

    /**
     * Animal "sounding" status
     *
     * @var string
     */
    public const STATUS_SOUND = 'sounds';

    /**
     * Animal "attacking" status
     *
     * @var string
     */
    public const STATUS_ATTACK = 'attacks';

    /**
     * Animal "sleeping" status
     *
     * @var string
     */
    public const STATUS_SLEEP = 'sleeps';

    /**
     * Animal "defending" status
     *
     * @var string
     */
    public const STATUS_DEFEND = 'defends';

    /**
     * Animal "eating" activity
     *
     * @return mixed
     */
    public function eat(Food $food);

    /**
     * Animal "sounding" activity
     *
     * @return mixed
     */
    public function sound();

    /**
     * Animal "attacking" activity
     *
     * @return mixed
     */
    public function attack(Animal $animal);

    /**
     * Animal "sleeping" activity
     *
     * @return mixed
     */
    public function sleep();

    /**
     * Animal "defending" activity
     *
     * @return mixed
     */
    public function defend();
}