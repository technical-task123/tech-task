<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 10:23
 */

namespace DanchukAS\Test;


use DanchukAS\Implementation\Zoo;
use DanchukAS\Scheme\Animal\Animal;
use DanchukAS\Scheme\Animal\AnimalConfigAbstract;
use DanchukAS\Scheme\ZooConfiguration;
use PHPUnit\Framework\TestCase;

class ZooTest extends TestCase
{
    // emulate dataprovider. because @dataprovider with mock->expects not worked jet.
    public function testLiveDataProvider()
    {
        $config_without_animal = new ZooConfiguration();
        $config_1_animal = new ZooConfiguration([$this->getAnyAnimal()]);
        $config_many_animal = new ZooConfiguration([$this->getAnyAnimal(), $this->getAnyAnimal()]);
        $config_list = [
            'without elements' => [$config_without_animal],
            '1 element' => [$config_1_animal],
            'more than 1 element' => [$config_many_animal]
        ];

        foreach ($config_list as [$config]) {
            $this->live($config);
        }
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject
     * @throws \ReflectionException
     */
    public function getAnyAnimal()
    {
        $mock = $this->getMockBuilder(Animal::class)
            ->setConstructorArgs([$this->getAnimalConfig()])
            ->getMock();

        return $mock;
    }

    public function getAnimalConfig()
    {
        $mock = $this->getMockBuilder(AnimalConfigAbstract::class)
            ->getMockForAbstractClass();

        return $mock;
    }

    private function live(ZooConfiguration $config)
    {
        $animal_list = $config->getAnimalList();
        /** @var \PHPUnit_Framework_MockObject_MockObject $animal */
        foreach ($animal_list as &$animal) {
            $animal->expects(self::once())->method('live');
        }
        unset($animal);

        $zoo = new Zoo($config);

        $zoo->live();
    }
}
