<?php

/**
 * AnimalServant.php
 *
 * PHP version 7.0
 *
 * AnimalServant class, provides treat method for Animal
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App\Zoo;

use App\Zoo\animals\Animal;

/**
 * @class AnimalFactory
 */
class AnimalServant
{
    /**
     * @var array
     */
    private $abilityObjects = [
        'bite' => 'man',
        'eat'  => 'food',
    ];

    /**
     * Get all animal abilities and use them
     *
     * @param Animal $animal
     *
     * @return string
     */
    public function treat(Animal $animal)
    {
        $result = '';
        $abilities = $animal->getAbilities();
        foreach ($abilities as $ability) {
            try {
                $result .= call_user_func([$animal, $ability], $this->abilityObjects[$ability] ?? []);
            } catch (\Exception $e) {
                trigger_error(
                    'Can not treat the animal ability ' . var_export($ability, 1)
                    . '. Error: ' . $e->getMessage(),
                    E_USER_WARNING
                );
            }
        }
        return $result;
    }
}
