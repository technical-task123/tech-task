<?php

namespace App\Zoo\Animals;


use App\Zoo\Animal;
use App\Zoo\VitalActivities\MovingActivity;
use App\Zoo\VitalActivities\SwimingActivity;

/**
 * Class Alligator
 *
 * @package App\Zoo\Animals
 */
class Alligator extends Animal implements MovingActivity, SwimingActivity
{
    /**
     * Set "walking" activity
     *
     * @return void
     */
    public function walk()
    {
        $this->setActivityStatus(self::STATUS_WALK);
    }

    /**
     * Set "running" activity
     *
     * @return void
     */
    public function run()
    {
        $this->setActivityStatus(self::STATUS_RUN);
    }

    /**
     * Set "jumping" activity
     *
     * @return void
     */
    public function jump()
    {
        $this->doNothing();
    }

    /**
     * Set "swiming" activity
     *
     * @return void
     */
    public function swim()
    {
        $this->setActivityStatus(self::STATUS_SWIM);
    }

    /**
     * Set "diving" activity
     *
     * @return void
     */
    public function dive()
    {
        $this->setActivityStatus(self::STATUS_DIVE);
    }
}