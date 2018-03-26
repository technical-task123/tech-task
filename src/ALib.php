<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 09:36
 */


/**
 * Class ALib
 */
abstract class ALib
{
    private $baseNamespace;

    private $baseLib;

    private $thisClassName;


    protected function getCalledClassName($methodName)
    {
        return $this->getBaseNamespace() . $this->getThisClassName() . '\\' . ucfirst($methodName);
    }

    private $propertyList = [];
    private $methodList = [];

    public function __get($name)
    {
        if (!\array_key_exists($name, $this->propertyList)) {
            $clone = clone $this;
            $clone->baseLib = $this->getBaseLib();
            $clone->baseNamespace = $this->getBaseNamespace();
            $clone->thisClassName = $this->getThisClassName() . '\\' . \ucfirst($name);
            $this->propertyList[$name] = $clone;
        }

        return $this->propertyList[$name];
    }

    private function getThisClassName()
    {
        if (empty($this->thisClassName)) {
            $this->thisClassName = '\\' . \substr(static::class, \strrpos(static::class, '\\') + 1);
        }

        return $this->thisClassName;
    }

    public function __set($name, $value)
    {
        $this->propertyList[$name] = $value;
    }

    public function __isset($name)
    {
        return \array_key_exists($name, $this->propertyList);
    }


    public function __call($methodName, $arguments)
    {
        if (!\array_key_exists($methodName, $this->methodList)) {
            $class = self::getCalledClassName($methodName);
            $method = new $class;
            $method->lib = $this->getBaseLib();
            $this->methodList[$methodName] = $method;
        }

        return $this->methodList[$methodName]->run(...$arguments);
    }

    private function getBaseNamespace()
    {
        if (null === $this->baseNamespace) {
            $this->baseNamespace = '\\' . \str_replace($this->getThisClassName(), '', static::class);
        }

        return $this->baseNamespace;
    }

    private function getBaseLib(): ALib
    {
        if (null === $this->baseLib) {
            $this->baseLib = $this;
        }

        return $this->baseLib;
    }

}