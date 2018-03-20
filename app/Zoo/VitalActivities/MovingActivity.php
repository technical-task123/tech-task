<?php
declare(strict_types=1);

namespace App\Zoo\VitalActivities;

/**
 * Interface MovingActivity
 *
 * @package App\Zoo\VitalActivities
 */
interface MovingActivity
{
    /**
     * Animal "walks" status
     *
     * @var string
     */
    public const STATUS_WALK = 'walks';

    /**
     * Animal "runs" status
     *
     * @var string
     */
    public const STATUS_RUN = 'runs';

    /**
     * Animal "jumps" status
     *
     * @var string
     */
    public const STATUS_JUMP = 'jumps';

    /**
     * Animal "walking" activity
     *
     * @return mixed
     */
    public function walk();

    /**
     * Animal "running" activity
     *
     * @return mixed
     */
    public function run();

    /**
     * Animal "jumping" activity
     *
     * @return mixed
     */
    public function jump();
}