<?php

class RatTest extends AbstractAnimalTest
{
    /**
     * @return string[]
     */
    public function stuffProvider(): array
    {
        return [
            'Rat Test eats food',
            'Rat Test pies',
        ];
    }

    protected function getSUT(): Animal
    {
        return new Rat('Test');
    }
}
