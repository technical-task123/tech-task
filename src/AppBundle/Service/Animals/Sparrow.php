<?php

namespace AppBundle\Service\Animals;

use AppBundle\Service\AbstractAnimal;
use AppBundle\Service\Interfaces\{FlyingInterface, MakingSoundInterface, WalkingInterface};
use AppBundle\Service\Traits\WalkTrait;

/**
 * Class Sparrow
 * @package AppBundle\Service\Animals
 */
class Sparrow extends AbstractAnimal implements WalkingInterface, FlyingInterface, MakingSoundInterface
{
    protected $name = 'sparrow';
    protected $sound = 'tweet';

    use WalkTrait;

    /**
     * Get the value of how sparrow fly
     *
     * @return void
     */
    public function fly(): void
    {
        echo $this->getName() . ' fly' . PHP_EOL;
    }

    /**
     * Get sparrow sounds
     *
     * @return void
     */
    public function makeSounds(): void
    {
        echo $this->getName() . ' ' . $this->getSound() . PHP_EOL;
    }
}