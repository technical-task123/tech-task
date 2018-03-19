<?php

class CatTest extends AbstractAnimalTest
{
    protected function getSUT(): Animal
    {
        return new Cat('Test');
    }

    /**
     * @return string[]
     */
    protected function getExpectedStuff(): array
    {
        return [
            'Cat Test eats food',
            'Cat Test walks',
            'Cat Test meows',
        ];
    }
}
