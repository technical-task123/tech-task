<?php

namespace Ajax\Zoo;

abstract class Animal
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $sound;

    /**
     * Animals which can make sound echoes its sound
     */
    public function makeSound()
    {
        if ($this->sound) {
            echo sprintf('%s sounds "%s"%s', $this->name, $this->sound, PHP_EOL);
        }
    }

    /**
     * Echoes this animal name that eating some $food
     *
     * @param string $food
     */
    public function eat(string $food)
    {
        echo sprintf('%s is eating %s%s', $this->name, $food, PHP_EOL);
    }

    /**
     * Returns this animal name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Contains actions which identify Animal interaction
     */
    public function interact()
    {
    }
}
