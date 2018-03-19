<?php

namespace Animal;

class RatTest extends AbstractAnimalTest
{
    protected function getSUT(): Animal
    {
        return new Rat('Test');
    }

    /**
     * @return string[]
     */
    protected function getExpectedStuff(): array
    {
        return [
            'Rat Test eats food',
            'Rat Test runs',
            'Rat Test pies',
        ];
    }
}
