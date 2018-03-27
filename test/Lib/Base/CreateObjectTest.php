<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2017-07-15 00:56
 */

namespace DanchukAS\AmadeusTechTask123Test;

use DanchukAS\AmadeusTechTask123\Lib\Base\CreateObject;
use DanchukAS\Test\Mock\ClassNameGenerator;
use DanchukAS\Test\Mock\NameQualifier;
use PHPUnit\Framework\TestCase;

/**
 * Class CreateObjectTest
 *
 * Property $lib, type \LibFunction are not tested because are now not used.
 * They should be tested in "DanchukAS\AmadeusTechTask123\Lib" tests.
 *
 * @package DanchukAS\AmadeusTechTask123Test
 */
class CreateObjectTest extends TestCase
{

    /**
     * @return CreateObject
     */
    public function testCreateInstance()
    {
        $instance_tested_class = new CreateObject();

        $message = 'Constructor return something else of created object.';
        self::assertInternalType('object', $instance_tested_class, $message);

        return $instance_tested_class;
    }


    /**
     * @depends testCreateInstance
     *
     * @param $instance_tested_class
     */
    public function testConstructor($instance_tested_class)
    {
        $message = "Class constructor return object of not self class.";
        self::assertInstanceOf(CreateObject::class, $instance_tested_class, $message);
    }


    /**
     * @depends testCreateInstance
     *
     * @param $instance_tested_class
     */
    public function testRunnable($instance_tested_class): void
    {
        self::assertTrue(
            method_exists($instance_tested_class, 'run'),
            'Instance does not have method "run".'
        );
    }


    /**
     * @depends      testCreateInstance
     * @depends      testRunnable
     *
     * @dataProvider providerAnyClassName
     */
    public function testSupportTypeObject($class, $instance_tested_class)
    {
        $created_object = $instance_tested_class->run($class);

        $message = "Class alike \"$class\" is not support.";
        self::assertInstanceOf($class, $created_object, $message);
    }


    /**
     * @depends      testCreateInstance
     * @depends      testRunnable
     *
     * @dataProvider providerAnyClassName
     */
    public function testCreatedNewObject($class, $instance_tested_class)
    {
        $instance1 = $instance_tested_class->run($class);
        $instance2 = $instance_tested_class->run($class);

        $message = 'Return same instance instead new instance.';
        self::assertNotSame($instance1, $instance2, $message);
    }


    /**
     * @depends      testCreateInstance
     * @depends      testRunnable
     *
     * @dataProvider providerAnyClassName
     */
    public function testCreatedWithoutChanges($class, $instance_tested_class)
    {
        $object = $instance_tested_class->run($class);

        $message = 'Created object by "CreateObject" is not identify created with "new"';
        self::assertEquals(new $class, $object, $message);
    }


    public function testNamespace()
    {
        $tested_class_name = CreateObject::class;
        $last_namespace_tested_class = 'DanchukAS\AmadeusTechTask123\Lib\Base';

        $pos_end_namespace = \strrpos($tested_class_name, '\\');
        $current_namespace_tested_class = \substr($tested_class_name, 0, $pos_end_namespace);

        $message = "Namespace of tested class changed"
            . " from \"$last_namespace_tested_class\""
            . " to \"$current_namespace_tested_class\"";

        self::assertEquals(
            $last_namespace_tested_class,
            $current_namespace_tested_class,
            $message
        );
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
