<?php

class SparrowTest extends AbstractAnimalTest
{
    /**
     * @return string[]
     */
    public function stuffProvider(): array
    {
        return [
            'Sparrow Test eats food',
            'Sparrow Test walks',
            'Sparrow Test tweets',
            'Sparrow Test flies',
        ];
    }

    protected function getSUT(): Animal
    {
        return new Sparrow('Test');
    }
}
