<?php
declare(strict_types=1);

namespace Tests\App\Zoo\Animals;


use App\Zoo\Animal;
use App\Zoo\Aviaries\CrocodilesAviary;
use App\Zoo\Food;
use App\Zoo\VitalActivities\MovingActivity;
use App\Zoo\VitalActivities\SwimingActivity;

class AlligatorTest extends AbstractAnimal
{
    public function setUp()
    {
        parent::setUp();

        $this->animalInstance = CrocodilesAviary::makeAlligator(
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
        return CrocodilesAviary::makeAlligator(
            '"Victim test alligator"',
            10,
            new Food(20)
        );
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
        $status = MovingActivity::STATUS_RUN;

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

    public function testSwimActivity()
    {
        // Activity status
        $status = SwimingActivity::STATUS_SWIM;

        // Run "swim" function
        $this->animalInstance->swim();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }

    public function testDiveActivity()
    {
        // Activity status
        $status = SwimingActivity::STATUS_DIVE;

        // Run "dive" function
        $this->animalInstance->dive();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }
}