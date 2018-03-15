<?php

namespace Zoo {

    trait Walkable
    {
        public function walk()
        {
            $this->simpleAction('walking');
        }

    }
}