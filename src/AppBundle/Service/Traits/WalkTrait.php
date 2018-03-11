<?php

namespace AppBundle\Service\Traits;

/**
 * Class WalkTrait
 * @package AppBundle\Service\Traits
 */
trait WalkTrait
{
    /**
     * Get animal walks
     *
     * @return void
     */
    public function walk(): void
    {
        echo $this->getName() . ' is walking' . PHP_EOL;
    }
}