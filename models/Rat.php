<?php

namespace Zoo {

    class Rat extends Animal
    {
        use Runnable;

        public function pi()
        {
            $this->simpleAction('Pi');
        }


    }
}