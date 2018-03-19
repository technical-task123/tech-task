<?php

namespace App\Zoo\Aviaries;


use App\Zoo\Animals\FatPetCat;
use App\Zoo\Animals\WildCat;
use App\Zoo\Food;

/**
 * Class CatsAviary
 *
 * @package App\Zoo\Aviaries
 */
abstract class CatsAviary
{
    /**
     * Aviary name
     *
     * @var string
     */
    public const NAME = 'Cats aviary';

    /**
     * Return WildCat instance
     *
     * @param string $name
     * @param int    $animalSize
     * @param Food   $foodRation
     *
     * @return WildCat
     */
    public static function makeWildCat(string $name, int $animalSize, Food $foodRation): WildCat
    {
        return new WildCat($name, $animalSize, $foodRation);
    }

    /**
     * Return FatPetCat instance
     *
     * @param string $name
     * @param int    $animalSize
     * @param Food   $foodRation
     *
     * @return FatPetCat
     */
    public static function makeFatPetCat(string $name, int $animalSize, Food $foodRation): FatPetCat
    {
        return new FatPetCat($name, $animalSize, $foodRation);
    }
}