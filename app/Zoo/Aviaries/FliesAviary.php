<?php

namespace App\Zoo\Aviaries;


use App\Zoo\Animals\TsetseFly;
use App\Zoo\Food;

/**
 * Class FliesAviary
 *
 * @package App\Zoo\Aviaries
 */
abstract class FliesAviary
{
    /**
     * Aviary name
     *
     * @var string
     */
    public const NAME = 'Flies aviary';

    /**
     * Return TsetseFly instance
     *
     * @param string $name
     * @param int    $animalSize
     * @param Food   $foodRation
     *
     * @return TsetseFly
     */
    public static function makeTsetseFly(string $name, int $animalSize, Food $foodRation): TsetseFly
    {
        return new TsetseFly($name, $animalSize, $foodRation);
    }
}