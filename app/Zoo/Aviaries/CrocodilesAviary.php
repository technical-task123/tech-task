<?php
declare(strict_types=1);

namespace App\Zoo\Aviaries;

use App\Zoo\Animals\Alligator;
use App\Zoo\Food;

/**
 * Class CrocodilesAviary
 *
 * @package App\Zoo\Aviaries
 */
abstract class CrocodilesAviary
{
    /**
     * Aviary name
     *
     * @var string
     */
    public const NAME = 'Crocodiles aviary';

    /**
     * Return Alligator instance
     *
     * @param string $name
     * @param int    $animalSize
     * @param Food   $foodRation
     *
     * @return Alligator
     */
    public static function makeAlligator(string $name, int $animalSize, Food $foodRation): Alligator
    {
        return new Alligator($name, $animalSize, $foodRation);
    }
}
