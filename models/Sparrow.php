<?php

namespace Zoo {

    class Sparrow extends Animal
    {
        use Walkable;

        public function fly()
        {
            $this->simpleAction('fly');
        }

        public function tweet()
        {
            $this->simpleAction('tweet-tweet');
        }

    }
}