<?php

namespace Test\Model\Behaviours\Sound;

use Test\AnimalsInterface\Behaviours\SoundBehaviour;
use Test\Model\AbstractAnimal;

/**
 * Class DefaultSoundBehaviour
 * @package Test\Model\Behaviours\Sound
 */
class CustomSoundBehaviour implements SoundBehaviour
{
    /**
     * @var string
     */
    private $defaultSound;

    /**
     * DefaultSoundBehaviour constructor.
     * @param string $defaultSound
     */
    public function __construct(string $defaultSound)
    {
        $this->defaultSound = $defaultSound;
    }

    /**
     * @param AbstractAnimal $animal
     * @return mixed
     */
    public function sound(AbstractAnimal $animal): void
    {
        echo $animal->getName() . ' ' . $this->defaultSound;
    }
}
