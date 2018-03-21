<?php

namespace Zoo {

    class Dog extends Animal
    {
        use Runnable;

        public function wuf()
        {
            $this->simpleAction('Wuf!');
        }

        public function bite($object)
        {
            $this->simpleAction('has bitten', $object);
        }

    }
}