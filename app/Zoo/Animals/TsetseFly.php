<?php

namespace App\Zoo\Animals;


use App\Zoo\Animal;
use App\Zoo\VitalActivities\FlyingActivity;

/**
 * Class TsetseFly
 *
 * @package App\Zoo\Animals
 */
class TsetseFly extends Animal implements FlyingActivity
{
    /**
     * Set activity status "flies"
     *
     * @return void
     */
    public function fly(): void
    {
        $this->setActivityStatus(self::STATUS_FLY);
    }
}