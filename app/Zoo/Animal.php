<?php
declare(strict_types=1);

namespace App\Zoo;

/**
 * Class Animal
 *
 * @package App\Zoo
 */
abstract class Animal implements VitalActivity
{
    /**
     * Activity status "does nothing"
     *
     * @var string
     */
    public const STATUS_DO_NOTHING = 'does nothing';

    /**
     * Animal name
     *
     * @var string
     */
    protected $name;

    /**
     * Animal activity status
     *
     * @var string
     */
    protected $activityStatus;

    /**
     * Animal daily ration food size
     *
     * @var Food
     */
    protected $foodRation;

    /**
     * Animal size
     *
     * @var int
     */
    protected $animalSize;

    /**
     * Animal constructor.
     *
     * @param string $name
     * @param int    $animalSize
     * @param Food   $foodRation
     */
    public function __construct(string $name, int $animalSize, Food $foodRation)
    {
        $this->name = $name;
        $this->foodRation = $foodRation;
        $this->animalSize = $animalSize;
        $this->activityStatus = self::STATUS_DO_NOTHING;
    }

    /**
     * Get animal name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get animal size
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->animalSize;
    }

    /**
     * Get animal food ration
     *
     * @return Food
     */
    public function getFoodRation(): Food
    {
        return $this->foodRation;
    }

    /**
     * Get animal activity status
     *
     * @return string
     */
    public function getActivityStatus(): string
    {
        return $this->activityStatus;
    }

    /**
     * Set animal activity status
     *
     * @param string $status
     * @param bool   $showStatus
     * @return void
     */
    public function setActivityStatus(string $status, bool $showStatus = true): void
    {
        $this->activityStatus = $status;

        if ($showStatus) {
            $this->showActivityStatus();
        }
    }

    /**
     * Set activity status "eats"
     *
     * @param Food $food
     *
     * @return void
     * @throws \Exception
     */
    public function eat(Food $food): void
    {
        $foodSize = $food->getSize();

        $this->foodRation->decreaseSize($foodSize);

        $this->setActivityStatus(self::STATUS_EAT, false);

        output(
            sprintf(
                'Animal %s %s %d food. %d food remains',
                $this->name,
                $this->activityStatus,
                $foodSize,
                $this->foodRation->getSize()
            )
        );
    }

    /**
     * Set activity status "sounds"
     *
     * @return void
     */
    public function sound(): void
    {
        $this->setActivityStatus(self::STATUS_SOUND);
    }

    /**
     * Set activity status "attacks" and activity status "defends" for victim
     *
     * @param Animal $animal
     *
     * @return void
     */
    public function attack(Animal $animal): void
    {
        $this->setActivityStatus(self::STATUS_ATTACK, false);

        $animal->setActivityStatus(self::STATUS_DEFEND, false);

        output(
            sprintf(
                'Animal %s %s %s. Animal %s %s',
                $this->name,
                $this->activityStatus,
                $animal->getName(),
                $animal->getName(),
                $animal->getActivityStatus()
            )
        );
    }

    /**
     * Set activity status "sleeps"
     *
     * @return void
     */
    public function sleep(): void
    {
        $this->setActivityStatus(self::STATUS_SLEEP);
    }

    /**
     * Set activity status "defends"
     *
     * @return void
     */
    public function defend(): void
    {
        $this->setActivityStatus(self::STATUS_DEFEND);
    }

    /**
     * Set activity status "does nothing"
     *
     * @return void
     */
    public function doNothing(): void
    {
        $this->setActivityStatus(self::STATUS_DO_NOTHING);
    }

    /**
     * Show activity status
     */
    protected function showActivityStatus(): void
    {
        output(
            sprintf(
                'Animal %s %s',
                $this->name,
                $this->activityStatus
            )
        );
    }
}