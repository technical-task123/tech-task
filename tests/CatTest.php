<?php

class CatTest extends AbstractAnimalTest
{
    /**
     * @return string[]
     */
    public function stuffProvider(): array
    {
        return [
            'Cat Test eats food',
            'Cat Test walks',
            'Cat Test meows',
        ];
    }

    protected function getSUT(): Animal
    {
        return new Cat('Test');
    }
}
