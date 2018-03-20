<?php
declare(strict_types=1);

namespace App\Zoo;

/**
 * Class Food
 *
 * @package App\Zoo
 */
class Food
{
    /**
     * Food size
     *
     * @var int
     */
    private $size;

    /**
     * Food constructor.
     *
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * Get food size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Decrease food size
     *
     * @param int $value
     *
     * @throws \Exception
     */
    public function decreaseSize(int $value): void
    {
        $value = abs($value);

        if ($value > $this->size) {
            throw new \Exception('Not enough food!');
        }

        $this->size -= $value;
    }

    /**
     * Increase food size
     *
     * @param int $value
     */
    public function increaseSize(int $value): void
    {
        $this->size += abs($value);
    }
}