<?php

namespace Test\Model;

use Test\AnimalsInterface\Behaviours\EatingBehaviour;
use Test\AnimalsInterface\Behaviours\SoundBehaviour;

/**
 * Class AbstractAnimal
 * @package Test\Model
 */
abstract class AbstractAnimal
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var EatingBehaviour
     */
    protected $eatBehaviour;

    /**
     * @var SoundBehaviour
     */
    protected $soundBehaviour;

    /**
     * AbstractAnimal constructor.
     * @param string $name
     * @param EatingBehaviour $eatBehaviour
     * @param SoundBehaviour $soundBehaviour
     */
    public function __construct(string $name, EatingBehaviour $eatBehaviour, SoundBehaviour $soundBehaviour)
    {
        $this->name = $name;
        $this->eatBehaviour = $eatBehaviour;
        $this->soundBehaviour = $soundBehaviour;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * eat
     */
    public function eat(): void
    {
        $this->eatBehaviour->eat($this);
    }

    /**
     * sound
     */
    public function sound(): void
    {
        $this->soundBehaviour->sound($this);
    }
}
