<?php

namespace Zoo {

    abstract class Animal
    {

        public function eat(string $food)
        {
            $this->simpleAction('has just eat', $food);
        }

        public function getName(): string
        {
            $name = explode('\\', get_class($this));
            return array_pop($name);
        }

        protected function simpleAction(string $action, string $object = '')
        {
            echo $this->getName() . ' ' . $action;
            if ($object != '') {
                echo ' ' . $object;
            }
            echo '<br>';
        }

    }
}