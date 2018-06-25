<?php declare(strict_types=1);

namespace TestTask\Entities;

abstract class Animal
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function eat(string $food): void
    {
        echo $this->getName() . ' eat ' . $food . PHP_EOL;
    }

    abstract public function runAction(): void;
}