<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2017-07-15 00:56
 */

namespace DanchukAS\AmadeusTechTask123Test\Lib\CreateObject;

use DanchukAS\AmadeusTechTask123\Lib\Base\CreateObject;
use DanchukAS\AmadeusTechTask123Test\Provider\AnyClassNameProvider;
use PHPUnit\Framework\TestCase;


/**
 * Class CreateObjectAdditionalTest
 *
 * Property $lib, type \LibFunction are not tested because are now not used.
 * They should be tested in "DanchukAS\AmadeusTechTask123\Lib" tests.
 *
 * @package DanchukAS\AmadeusTechTask123Test
 */
class CreateObjectAdditionalTest extends TestCase
{

    /**
     * Default value present because "@depend CreateObjectBaseTest::testClassExist" not work
     *
     *
     * @return CreateObject
     */
    public function testCreateInstance($tested_class_name = CreateObjectBaseTest::TESTED_CLASS_NAME)
    {
        $instance_tested_class = new $tested_class_name();

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
        self::assertInstanceOf(CreateObjectBaseTest::TESTED_CLASS_NAME, $instance_tested_class, $message);
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
     * @dataProvider providerAllowedParam
     */
    public function testAllowedParam($param, $instance_tested_class)
    {
        $created_object = $instance_tested_class->run($param);

        self::assertInternalType('object', $created_object);
    }


    /**
     * @depends      testCreateInstance
     * @depends      testAllowedParam
     *
     * @dataProvider providerAllowedParam
     */
    public function testTypeCreatedObject($param, $instance_tested_class)
    {
        $created_object = $instance_tested_class->run($param);

        $class = $param ?? \stdClass::class;

        $param_desc = \var_export($param, true);
        $message = "Created object isn't instance of $class when param is \"$param_desc\".";

        self::assertInstanceOf($class, $created_object, $message);
    }



    /**
     * @depends      testCreateInstance
     * @depends      testRunnable
     *
     * @dataProvider providerAllowedParam
     */
    public function testSamenestCreatedObjects($class, $instance_tested_class)
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
     * @dataProvider providerAllowedParam
     */
    public function testCreatedWithoutChanges($param, $instance_tested_class)
    {
        $object = $instance_tested_class->run($param);

        $class = $param ?? \stdClass::class;

        $message = 'Created object by "CreateObject" is not identify created with "new"';
        self::assertEquals(new $class, $object, $message);
    }


    public function providerAllowedParam()
    {
        $provider_data = \array_merge(AnyClassNameProvider::getData(), [
            'null' => [null]
        ]);

        return $provider_data;
    }

}
