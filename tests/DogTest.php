<?php

class DogTest extends AbstractAnimalTest
{
    /**
     * @return string[]
     */
    public function stuffProvider(): array
    {
        return [
            'Dog Test eats food',
            'Dog Test walks',
            'Dog Test runs',
            'Dog Test wufs',
            'Dog Test bites man',
        ];
    }

    protected function getSUT(): Animal
    {
        return new Dog('Test');
    }
}
