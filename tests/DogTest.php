<?php

class DogTest extends AbstractAnimalTest
{
    protected function getSUT(): Animal
    {
        return new Dog('Test');
    }

    /**
     * @return string[]
     */
    protected function getExpectedStuff(): array
    {
        return [
            'Dog Test eats food',
            'Dog Test walks',
            'Dog Test runs',
            'Dog Test wufs',
            'Dog Test bites man',
        ];
    }
}
