<?php

namespace Ajax\Zoo;

class Sparrow extends Animal implements Flyable, Walkable
{
    use FlyableTrait;
    use WalkableTrait;

    protected $name = 'sparrow';
    protected $sound = 'tweet';

    /**
     * {@inheritdoc}
     */
    public function interact()
    {
        parent::interact();
        $this->walk();
        $this->fly();
    }
}
