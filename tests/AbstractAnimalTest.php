<?php

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4('', __DIR__ . '/..', true);
$classLoader->register();

use PHPUnit\Framework\TestCase;

abstract class AbstractAnimalTest extends TestCase
{
    public function testDoStuff()
    {
        \ob_start();
        $this->getSUT()->doStuff();
        $stuff = \ob_get_clean();

        $this->assertEquals(
            $this->stuffProvider(),
            \array_filter(\array_map('\\trim', \explode('<br>', $stuff)))
        );
    }

    /**
     * @return string[]
     */
    abstract public function stuffProvider(): array;

    abstract protected function getSUT(): Animal;
}
