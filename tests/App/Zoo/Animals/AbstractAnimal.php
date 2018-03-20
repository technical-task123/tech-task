<?php
declare(strict_types=1);

namespace Tests\App\Zoo\Animals;

use App\Zoo\Food;
use App\Zoo\VitalActivity;
use PHPUnit\Framework\TestCase;
use App\Zoo\Animal;

abstract class AbstractAnimal extends TestCase
{
    /**
     * Animal name
     *
     * @var string
     */
    protected $animalName;

    /**
     * Animal size
     *
     * @var int
     */
    protected $animalSize;

    /**
     * Animal food ration
     *
     * @var Food
     */
    protected $animalFoodRation;

    /**
     * Animal instance
     *
     * @var Animal
     */
    protected $animalInstance;

    /**
     * Must be overridden in children classes
     *
     * @return Animal
     */
    abstract protected function getVictimAnimal(): Animal;

    public function setUp()
    {
        $this->animalName = '"Abstract Animal"';
        $this->animalSize = 10;
        $this->animalFoodRation = new Food(20);
        $this->animalActivityStatus = Animal::STATUS_DO_NOTHING;
    }

    public function testAfterInstanceCreation()
    {
        // Test name
        $this->assertEquals($this->animalName, $this->animalInstance->getName());

        // Test size
        $this->assertEquals($this->animalSize, $this->animalInstance->getSize());

        // Test food ration value
        $this->assertEquals(
            $this->animalFoodRation->getSize(),
            $this->animalInstance->getFoodRation()->getSize()
        );

        // Test activity status
        $this->assertEquals($this->animalActivityStatus, $this->animalInstance->getActivityStatus());
    }

    public function testActivityStatusChanging()
    {
        // Test activity status changing
        $status = VitalActivity::STATUS_SLEEP;

        $this->expectOutputString(
            sprintf(
                'Animal %s %s',
                $this->animalName,
                $status
            ) . "\r\n"
        );

        // Set and test default status with output testing
        $this->animalInstance->setActivityStatus($status);
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }

    public function testEatActivity()
    {
        // Activity status
        $status = VitalActivity::STATUS_EAT;

        // Eaten food
        $eatenFood = new Food(5);

        // Test output
        $this->expectOutputString(
            sprintf(
                'Animal %s %s %d food. %d food remains',
                $this->animalName,
                $status,
                $eatenFood->getSize(),
                $this->animalFoodRation->getSize() - $eatenFood->getSize()
            ) . "\r\n"
        );

        // Run "eat" function
        $this->animalInstance->eat($eatenFood);

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }

    public function testAttackActivity()
    {
        // Attacker and victim animal activity statuses
        $attackerAnimalStatus = VitalActivity::STATUS_ATTACK;
        $victimAnimalStatus = VitalActivity::STATUS_DEFEND;

        // Victim animal
        $victimAnimal = $this->getVictimAnimal();

        // Test output
        $this->expectOutputString(
            sprintf(
                'Animal %s %s %s. Animal %s %s',
                $this->animalName,
                $attackerAnimalStatus,
                $victimAnimal->getName(),
                $victimAnimal->getName(),
                $victimAnimalStatus
            ) . "\r\n"
        );

        // Run "attack" function
        $this->animalInstance->attack($victimAnimal);

        // Test attacker animal status
        $this->assertEquals($attackerAnimalStatus, $this->animalInstance->getActivityStatus());

        // Test victim animal status
        $this->assertEquals($victimAnimalStatus, $victimAnimal->getActivityStatus());
    }

    public function testSoundActivity()
    {
        // Activity status
        $status = VitalActivity::STATUS_SOUND;

        // Run "sound" function
        $this->animalInstance->sound();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }

    public function testSleepActivity()
    {
        // Activity status
        $status = VitalActivity::STATUS_SLEEP;

        // Run "sleep" function
        $this->animalInstance->sleep();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }

    public function testDoNothingActivity()
    {
        // Activity status
        $status = Animal::STATUS_DO_NOTHING;

        // Run "does nothing" function
        $this->animalInstance->doNothing();

        // Test status
        $this->assertEquals($status, $this->animalInstance->getActivityStatus());
    }
}
