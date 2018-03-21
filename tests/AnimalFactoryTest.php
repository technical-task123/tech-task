<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AnimalFactoryTest extends TestCase
{
    public function testCreateFromValidType()
    {
        $this->assertInstanceOf(\Zoo\Cat::class, \Zoo\AnimalFactory::getInstance('Cat'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCreateFromInvalidType()
    {
        Zoo\AnimalFactory::getInstance('Dragon');
    }

}