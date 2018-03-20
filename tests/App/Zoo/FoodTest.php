<?php
declare(strict_types=1);

namespace Tests\App\Zoo;

use App\Zoo\Food;
use PHPUnit\Framework\TestCase;

class FoodTest extends TestCase
{
    public function testFoodCanBeCreated()
    {
        $food = new Food(10);

        $this->assertInstanceOf(Food::class, $food);
    }

    public function testFoodRationCanBeIncreased()
    {
        // Test positive value increasing
        $foodRationValue = 10;
        $foodRationIncreasingSize = 10;
        $food = new Food($foodRationValue);
        $food->increaseSize($foodRationIncreasingSize);

        $this->assertEquals($foodRationValue + $foodRationIncreasingSize, $food->getSize());

        // Test negative value increasing
        $foodRationValue = 20;
        $foodRationIncreasingSize = -10;
        $food = new Food($foodRationValue);
        $food->increaseSize($foodRationIncreasingSize);

        $this->assertEquals($foodRationValue + abs($foodRationIncreasingSize), $food->getSize());
    }

    public function testFoodRationCanBeDecreased()
    {
        // Test positive value decreasing
        $foodRationValue = 10;
        $foodRationDecreasingSize = 5;
        $food = new Food($foodRationValue);
        $food->decreaseSize($foodRationDecreasingSize);

        $this->assertEquals($foodRationValue - $foodRationDecreasingSize, $food->getSize());

        // Test negative value decreasing
        $foodRationValue = 20;
        $foodRationDecreasingSize = -10;
        $food = new Food($foodRationValue);
        $food->decreaseSize($foodRationDecreasingSize);

        $this->assertEquals($foodRationValue - abs($foodRationDecreasingSize), $food->getSize());

        // Test exception during decreasing
        $foodRationValue = 10;
        $foodRationDecreasingSize = 15;
        $food = new Food($foodRationValue);

        $this->expectException(\Exception::class);

        $food->decreaseSize($foodRationDecreasingSize);

        $this->assertEquals($foodRationValue - $foodRationDecreasingSize, $food->getSize());
    }
}
