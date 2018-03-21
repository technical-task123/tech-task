<?php

namespace Zoo {

    trait Runnable
    {
        use Walkable; //We definitely can walk if we can run

        public function run()
        {
            $this->simpleAction('running');
        }

    }
}