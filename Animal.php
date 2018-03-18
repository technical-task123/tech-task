<?php

abstract class Animal
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function eat(string $food): void
    {
        $this->echo('eats %s', [$food]);
    }

    public function doStaff(): void
    {
        $this->eat('food');
    }

    abstract protected function getFullName(): string;

    protected function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $text
     * @param string[] $args
     */
    protected function echo(string $text, array $args = []): void
    {
        echo \sprintf(
            '%s ' . $text . '<br>' . PHP_EOL,
            ...\array_merge([$this->getFullName()], $args)
        );
    }
}
