<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-27 14:45
 */

namespace DanchukAS\AmadeusTechTask123Test;


abstract class TestCase extends \PHPUnit\Framework\TestCase
{

    /**
     * Will runned after all tests of child.
     * For run it earlier override function more higher in child class with body:
     * parent::testClassExist();
     *
     * @return string
     */
    public function testClassExist(): string
    {
        $tested_class_name = static::TESTED_CLASS_NAME;

        self::assertTrue(
            \class_exists($tested_class_name),
            "Class $tested_class_name not found."
        );

        return $tested_class_name;
    }


    /**
     * @todo class name to first test class_exist
     */
    public function testNamespace()
    {
        $tested_class_name = static::TESTED_CLASS_NAME;
        $last_namespace_tested_class = static::TESTED_CLASS_NAMESPACE;

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

}