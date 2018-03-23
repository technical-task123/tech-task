<?php
declare(strict_types=1);

namespace Tests\App\Zoo\Animals;

use App\Zoo\Animal;
use App\Zoo\Aviaries\FliesAviary;
use App\Zoo\Food;
use App\Zoo\VitalActivities\FlyingActivity;

class TsetseFlyTest extends AbstractAnimal
{
    public function setUp()
    {
        parent::setUp();

        $this->animalInstance = FliesAviary::makeTsetseFly(
            $this->animalName,
            $this->animalSize,
            $this->animalFoodRation
        );
    }

    /**
     * Must be overridden in children classes
     *
     * @return Animal
     */
    protected function getVictimAnimal(): Animal
    {
        return FliesAviary::makeTsetseFly('"Victim tsetse fly"', 10, new Food(20));
    }

    public function testFlyActivity()
    {
        // Activity status
        $status = FlyingActivity::STATUS_FLY;

        // Run "fly" function
        $this->animalInstance->fly();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }
}
