<?php

namespace Zoo {

    abstract class AnimalFactory
    {
        public static function getInstance(string $type): Animal
        {
            $_animal = null;
            switch (strtolower($type)) {
                default:
                    //Of course such jokes are legit only for test tasks, not for real work :)
                    throw new \InvalidArgumentException("EXCEPTION: You just discovered an unknown animal type: $type. You're gotta be a Noble prize winner!");
                    break;
                case 'cat':
                    $_animal = new Cat();
                    break;
                case 'dog':
                    $_animal = new Dog();
                    break;
                case 'rat':
                    $_animal = new Rat();
                    break;
                case 'sparrow':
                    $_animal = new Sparrow();
                    break;
            }
            return $_animal;
        }
    }
}