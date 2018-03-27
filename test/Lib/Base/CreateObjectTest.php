<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2017-07-15 00:56
 */

namespace DanchukAS\AmadeusTechTask123Test;


/** @noinspection PhpClassNamingConventionInspection */

use DanchukAS\AmadeusTechTask123\Lib\Base\CreateObject;
use DanchukAS\Test\Mock\ClassNameGenerator;
use DanchukAS\Test\Mock\NameQualifier;
use PHPUnit\Framework\TestCase;

/**
 * Class ExistWrongPidFileTest
 * Тести на невірний під файл
 * @package DanchukAS\DenyMultiplyRunTest
 */
class CreateObjectTest extends TestCase
{

    public function testConstructor()
    {
        $instance = new CreateObject();

        $message = "Class constructor return object of not self class.";
        self::assertInstanceOf(CreateObject::class, $instance, $message);
    }


    /**
     * @dataProvider providerAnyClassName
     */
    public function testSupportTypeObject($class)
    {
        $instance = new CreateObject();

        $created_object = $instance->run($class);
        self::assertInstanceOf($class, $created_object, "Class alike \"$class\" is not support.");
    }

    public function providerAnyClassName()
    {
        $name_qualifier = new NameQualifier();

        $provider_data = [];
        foreach ($this->providerTypeClass() as $name => $dataset) {
            [$class_name] = $dataset;
            $provider_data['fully qualified ' . $name] = [$name_qualifier->getFullyQualified($class_name)];
            $provider_data['qualified ' . $name] = [$name_qualifier->getQualified($class_name)];
        }

        return $provider_data;
    }

    public function providerTypeClass()
    {
        $generator = new ClassNameGenerator();

        return [
            'declared class with namespace' => [$generator->getDeclaredClass()],
            'std class without namespace' => [$generator->getStd()],
            'anonymous class' => [$generator->getAnonymous()]
        ];
    }

}
