<?php
declare(strict_types=1);

namespace App\Zoo\VitalActivities;

/**
 * Interface SwimingActivity
 *
 * @package App\Zoo\VitalActivities
 */
interface SwimingActivity
{
    /**
     * Animal "swims" status
     *
     * @var string
     */
    public const STATUS_SWIM = 'swims';

    /**
     * Animal "dives" status
     *
     * @var string
     */
    public const STATUS_DIVE = 'dives';

    /**
     * Animal "swiming" activity
     *
     * @return mixed
     */
    public function swim();

    /**
     * Animal "diving" activity
     *
     * @return mixed
     */
    public function dive();
}
