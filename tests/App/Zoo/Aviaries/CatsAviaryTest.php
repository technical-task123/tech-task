<?php
declare(strict_types=1);

namespace Tests\App\Zoo\Aviaries;

use App\Zoo\Animals\FatPetCat;
use App\Zoo\Animals\WildCat;
use App\Zoo\Aviaries\CatsAviary;
use App\Zoo\Food;
use PHPUnit\Framework\TestCase;

class CatsAviaryTest extends TestCase
{
    /**
     * Animal name
     *
     * @var string
     */
    private $animalName;

    /**
     * Animal size
     *
     * @var int
     */
    private $animalSize;

    /**
     * Animal food ration
     *
     * @var Food
     */
    private $animalFoodRation;

    public function setUp()
    {
        $this->animalName = 'Test animal';
        $this->animalSize = 10;
        $this->animalFoodRation = new Food(20);
    }

    public function testWildCatCanBeCreated(): void
    {
        $this->assertInstanceOf(
            WildCat::class,
            CatsAviary::makeWildCat(
                $this->animalName,
                $this->animalSize,
                $this->animalFoodRation
            )
        );
    }

    public function testFatPetCatCanBeCreated(): void
    {
        $this->assertInstanceOf(
            FatPetCat::class,
            CatsAviary::makeFatPetCat(
                $this->animalName,
                $this->animalSize,
                $this->animalFoodRation
            )
        );
    }
}