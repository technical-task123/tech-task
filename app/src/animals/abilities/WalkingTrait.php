<?php

/**
 * WalkingTrait.php
 *
 * PHP version 7.0
 *
 * Trait for common ability - walk
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo\animals\abilities;

/**
 * @trait WalkingTrait
 */
trait WalkingTrait
{
    /**
     * Method for walking
     *
     * @return string
     */
    public function walk() : string
    {
        return $this->name . ' is walking';
    }
}
