<?php

namespace AppBundle\Service\Animals;

use AppBundle\Service\AbstractAnimal;
use AppBundle\Service\Interfaces\{MakingSoundInterface, WalkingInterface};
use AppBundle\Service\Traits\WalkTrait;

/**
 * Class Cat
 * @package AppBundle\Service\Animals
 */
class Cat extends AbstractAnimal implements MakingSoundInterface, WalkingInterface
{
    protected $name = 'cat';
    protected $sound = 'meov';

    use WalkTrait;

    /**
     * Get cat sounds
     *
     * @return void
     */
    public function makeSounds(): void
    {
       echo $this->getName() . ' ' . $this->getSound() . PHP_EOL;
    }
}