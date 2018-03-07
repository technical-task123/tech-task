<?php

namespace Ajax\Zoo;

class Cat extends Animal implements Walkable, Runnable, Byteable
{
    use WalkableTrait;
    use RunnableTrait;
    use ByteableTrait;

    protected $name = 'cat';
    protected $sound = 'meow';

    /**
     * {@inheritdoc}
     */
    public function interact()
    {
        parent::interact();
        $this->walk();
    }
}
