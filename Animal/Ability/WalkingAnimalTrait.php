<?php

namespace Animal\Ability;

/**
 * @method void echo(string $text, string[] $args = null)
 */
trait WalkingAnimalTrait
{
    public function walk(): void
    {
        $this->echo('walks');
    }
}
