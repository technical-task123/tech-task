<?php

namespace App\Zoo\Animals;


use App\Zoo\Animal;
use App\Zoo\VitalActivities\MovingActivity;

/**
 * Class FatPetCat
 *
 * @package App\Zoo\Animals
 */
class FatPetCat extends Animal implements MovingActivity
{
    /**
     * Set "walking" activity
     *
     * @return void
     */
    public function walk(): void
    {
        $this->setActivityStatus(self::STATUS_WALK);
    }

    /**
     * Set "running" activity
     *
     * @return void
     */
    public function run(): void
    {
        $this->setActivityStatus(self::STATUS_WALK);
    }

    /**
     * Set "jumping" activity
     *
     * @return void
     */
    public function jump(): void
    {
        $this->doNothing();
    }
}