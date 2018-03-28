<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-27 19:02
 */

namespace DanchukAS\AmadeusTechTask123Test;

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public static $error;

    /**
     * @before
     */
    function resetError()
    {
        self::$error = [];
    }

    public function testOutput()
    {
        $expectedNormal = "cat walking
cat meow
cat eat food
dog walking
dog run
dog wuf
dog has bitten man
dog eat food
sparrow tweet
sparrow fly
sparrow eat food
rat pi
rat eat food
monkey eat food";

        $regexpExpectedError = '%Action "walk" is not available for run with next param: stdClass Object
\(
    \[object\] => Sparrow Object%';

        $regexExpectedOutput = "/^$expectedNormal$/";

        \set_error_handler(function ($errno, $mesage) {
            IndexTest::$error[] = $mesage;
        });

        \ob_start();
        include __DIR__ . '/../public/index.php';
        $output = \ob_get_contents();
        \ob_end_clean();

        \restore_error_handler();

        self::assertCount(1, self::$error);

        self::assertRegExp($regexpExpectedError, \current(self::$error));

        self::assertRegExp($regexExpectedOutput, $output);
    }
}
