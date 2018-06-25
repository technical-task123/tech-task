<?php declare(strict_types=1);

namespace TestTask\Entities;

use TestTask\Actions\RunningTrait;
use TestTask\Actions\WalkingTrait;

class Dog extends Animal
{
    use WalkingTrait;
    use RunningTrait;

    public function wuf(): void
    {
        echo $this->getName() . ' wuf' . PHP_EOL;
    }

    public function bite(string $object): void
    {
        echo $this->getName() . ' has bitten ' . $object . PHP_EOL;
    }

    public function runAction(): void
    {
        $this->walk();
        $this->run();
        $this->wuf();
        $this->bite('man');
    }
}