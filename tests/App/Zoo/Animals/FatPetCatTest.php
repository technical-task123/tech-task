<?php
declare(strict_types=1);

namespace Tests\App\Zoo\Animals;

use App\Zoo\Animal;
use App\Zoo\Aviaries\CatsAviary;
use App\Zoo\Food;
use App\Zoo\VitalActivities\MovingActivity;

class FatPetCatTest extends AbstractAnimal
{
    public function setUp()
    {
        parent::setUp();

        $this->animalInstance = CatsAviary::makeFatPetCat(
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
        return CatsAviary::makeFatPetCat('"Victim test fat pet cat"', 10, new Food(20));
    }

    public function testWalkActivity()
    {
        // Activity status
        $status = MovingActivity::STATUS_WALK;

        // Run "walk" function
        $this->animalInstance->walk();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }

    public function testRunActivity()
    {
        // Activity status
        $status = MovingActivity::STATUS_WALK;

        // Run "run" function
        $this->animalInstance->run();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }

    public function testJumpActivity()
    {
        // Activity status
        $status = Animal::STATUS_DO_NOTHING;

        // Run "jump" function
        $this->animalInstance->jump();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }
}
