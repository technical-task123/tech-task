<?php

namespace AppBundle\Service\Animals;

use AppBundle\Service\AbstractAnimal;
use AppBundle\Service\Interfaces\{ByteingInterface, RunningInterface, MakingSoundInterface, WalkingInterface};
use AppBundle\Service\Traits\WalkTrait;

/**
 * Class Dog
 * @package AppBundle\Service\Animals
 */
class Dog extends AbstractAnimal implements WalkingInterface, RunningInterface, MakingSoundInterface, ByteingInterface
{
    protected $name = 'dog';
    protected $sound = 'wuf';

    use WalkTrait;

    /**
     * Get the value of how dog runs
     *
     * @return void
     */
    public function run(): void
    {
        echo $this->getName() . ' run' . PHP_EOL;
    }

    /**
     * Get dog sounds
     *
     * @return void
     */
    public function makeSounds(): void
    {
        echo $this->getName() . ' ' . $this->getSound() . PHP_EOL;
    }

    /**
     * Get the value of how dog bytes
     *
     * @return void
     */
    public function byte(string $object): void
    {
        echo $this->getName() . ' has bitten ' . $object . PHP_EOL;
    }
}