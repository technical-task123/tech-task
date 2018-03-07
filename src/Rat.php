<?php

namespace Ajax\Zoo;

class Rat extends Animal implements Walkable, Runnable
{
    use WalkableTrait;
    use RunnableTrait;
    use ByteableTrait;

    protected $name = 'rat';
    protected $sound = 'pi';
}
