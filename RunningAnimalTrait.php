<?php

/**
 * @method void echo(string $text, string[] $args = null)
 */
trait RunningAnimalTrait
{
    public function run()
    {
        $this->echo('runs');
    }
}
