<?php
declare(strict_types=1);

namespace App\Zoo\VitalActivities;

/**
 * Interface FlyingActivity
 *
 * @package App\Zoo\VitalActivities
 */
interface FlyingActivity
{
    /**
     * Animal "flies" status
     *
     * @var string
     */
    public const STATUS_FLY = 'flies';

    /**
     * Animal "flying" activity
     *
     * @return mixed
     */
    public function fly();
}