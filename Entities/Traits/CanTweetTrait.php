<?php

namespace Entities\Traits;

/**
 * Class CanTweetTrait
 * @package Entities\Traits
 */
trait CanTweetTrait
{
    /**
     * Tweet action
     */
    public function tweet()
    {
        echo $this->name . ' tweet';
    }
}