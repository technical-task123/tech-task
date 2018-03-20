<?php
declare(strict_types=1);

namespace App\Zoo\Animals;


use App\Zoo\Animal;
use App\Zoo\VitalActivities\MovingActivity;

/**
 * Class WildCat
 *
 * @package App\Zoo\Animals
 */
class WildCat extends Animal implements MovingActivity
{
    /**
     * Set activity status "walks"
     *
     * @return void
     */
    public function walk(): void
    {
        $this->setActivityStatus(self::STATUS_WALK);
    }

    /**
     * Set activity status "runs"
     *
     * @return void
     */
    public function run(): void
    {
        $this->setActivityStatus(self::STATUS_RUN);
    }

    /**
     * Set activity status "jumps"
     *
     * @return void
     */
    public function jump(): void
    {
        $this->setActivityStatus(self::STATUS_JUMP);
    }
}