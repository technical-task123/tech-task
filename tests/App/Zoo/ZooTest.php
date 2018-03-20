<?php
declare(strict_types=1);

namespace Tests\App\Zoo;

use App\Zoo\Aviaries\CatsAviary;
use App\Zoo\Food;
use App\Zoo\Zoo;
use PHPUnit\Framework\TestCase;

class ZooTest extends TestCase
{
    /**
     * Zoo instance
     *
     * @var Zoo
     */
    private $zoo;

    public function setUp()
    {
        $this->zoo = new Zoo(100, new Food(200));
    }

    public function testZooCanBeCreated()
    {
        $this->assertInstanceOf(Zoo::class, $this->zoo);
    }

    public function testAddAnimalToZooWithSuccessMessage()
    {
        // Test adding animals to zoo
        $animal = CatsAviary::makeWildCat('"Test animal"', 10, new Food(20));

        $animals = $this->zoo->getAnimals();

        $this->expectOutputString(
            sprintf(
                'Animal %s was added to zoo!',
                $animal->getName()
            ) . "\r\n"
        );

        $this->assertInternalType('array', $animals);
        $this->assertEmpty($animals);
        $this->zoo->addAnimal($animal);

        $animals = $this->zoo->getAnimals();
        $this->assertNotEmpty($animals);
        $this->assertSame($animal, $animals[count($animals)-1]);
    }

    public function testAddAnimalToZooWithExceptionMessageDueToBiDailyRation()
    {
        // Test adding animals to zoo with exception due to big daily ration
        $animal = CatsAviary::makeWildCat('"Test animal 1"', 1, new Food(2000));

        $this->expectOutputString(
            sprintf(
                'Not enough food for %s animal!',
                $animal->getName()
            ) . "\r\n"
        );

        $this->zoo->addAnimal($animal);
    }

    public function testAddAnimalToZooWithExceptionMessageDueToOverSize()
    {
        // Test adding animals to zoo with exception due to big daily ration
        $animal = CatsAviary::makeWildCat('"Test animal 2"', 1000, new Food(20));

        $this->expectOutputString(
            sprintf(
                'Not enough area for %s animal!',
                $animal->getName()
            ) . "\r\n"
        );

        $this->zoo->addAnimal($animal);
    }

    public function testTotalAnimalsSizeAndFoodRation()
    {
        $animalSize = 10;
        $animalDailyRation = new Food(20);

        $firstAnimal = CatsAviary::makeWildCat('"Test animal 1"', $animalSize, $animalDailyRation);
        $secondAnimal = CatsAviary::makeWildCat('"Test animal 2"', $animalSize, $animalDailyRation);

        $this->zoo->addAnimal($firstAnimal);
        $this->zoo->addAnimal($secondAnimal);

        // Test total animals size
        $this->assertEquals(
            $animalSize * 2,
            $this->zoo->getAnimalsTotalSize()
        );

        // Test total animals foor ration
        $this->assertEquals(
            $animalDailyRation->getSize() * 2,
            $this->zoo->getAnimalsTotalFoodRation()
        );
    }
}
