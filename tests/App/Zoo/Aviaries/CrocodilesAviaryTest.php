<?php
declare(strict_types=1);

namespace Tests\App\Zoo\Aviaries;

use App\Zoo\Animals\Alligator;
use App\Zoo\Aviaries\CrocodilesAviary;
use App\Zoo\Food;
use PHPUnit\Framework\TestCase;

class CrocodilesAviaryTest extends TestCase
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

    public function testAlligatorCanBeCreated(): void
    {
        $this->assertInstanceOf(
            Alligator::class,
            CrocodilesAviary::makeAlligator(
                $this->animalName,
                $this->animalSize,
                $this->animalFoodRation
            )
        );
    }
}
