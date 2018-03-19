<?php

namespace Animal;

class SparrowTest extends AbstractAnimalTest
{
    protected function getSUT(): Animal
    {
        return new Sparrow('Test');
    }

    /**
     * @return string[]
     */
    protected function getExpectedStuff(): array
    {
        return [
            'Sparrow Test eats food',
            'Sparrow Test walks',
            'Sparrow Test tweets',
            'Sparrow Test flies',
        ];
    }
}
