<?php

namespace Zoo {

    class Cat extends Animal
    {
        use Runnable;

        public function meow()
        {
            $this->simpleAction('Meow!');
        }

    }
}