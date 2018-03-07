<?php

namespace Ajax\Zoo;

class Dog extends Animal implements Walkable, Runnable, Byteable
{
    use WalkableTrait;
    use RunnableTrait;
    use ByteableTrait;

    protected $name = 'dog';
    protected $sound = 'wuf';

    /**
     * {@inheritdoc}
     */
    public function interact()
    {
        parent::interact();
        $this->walk();
        $this->run();
        $this->byte('man');
    }
}
