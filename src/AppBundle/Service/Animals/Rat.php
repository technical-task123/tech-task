<?php

namespace AppBundle\Service\Animals;

use AppBundle\Service\AbstractAnimal;
use AppBundle\Service\Interfaces\MakingSoundInterface;

/**
 * Class Rat
 * @package AppBundle\Service\Animals
 */
class Rat extends AbstractAnimal implements MakingSoundInterface
{
    protected $name = 'rat';
    protected $sound = 'pi';

    /**
     * Get rat sounds
     *
     * @return void
     */
    public function makeSounds(): void
    {
        echo $this->getName() . ' ' . $this->getSound() . PHP_EOL;
    }
}