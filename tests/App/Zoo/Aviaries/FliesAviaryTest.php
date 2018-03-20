<?php
declare(strict_types=1);

namespace Tests\App\Zoo\Aviaries;

use App\Zoo\Animals\TsetseFly;
use App\Zoo\Aviaries\FliesAviary;
use App\Zoo\Food;
use PHPUnit\Framework\TestCase;

class FliesAviaryTest extends TestCase
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

    public function testTsetseFlyCanBeCreated(): void
    {
        $this->assertInstanceOf(
            TsetseFly::class,
            FliesAviary::makeTsetseFly(
                $this->animalName,
                $this->animalSize,
                $this->animalFoodRation
            )
        );
    }
}
