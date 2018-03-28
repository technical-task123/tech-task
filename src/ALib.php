<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-25 09:36
 */


/**
 * Class ALib
 *
 * @todo What is FunctionLibrary ? Danchuk Anatoliy vote "yes".
 * If only functions library without hierarchy by properties
 * than delete deprecated method and refactor class.
 */
abstract class ALib
{
    private $baseNamespace;

    private $baseLib;

    private $thisClassName;

    /**
     * @deprecated Because used only in deprecated methods
     * @since 1.0.5
     *
     * @var array
     */
    private $propertyList = [];

    private $methodList = [];

    /**
     * @deprecated
     * @see ALib annotation for understand why deprecated, how and when resolve situation.
     * @since 1.0.5
     *
     * @param $name
     * @return mixed
     */
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

    /**
     * @deprecated
     * @see ALib annotation for understand why deprecated, how and when resolve situation.
     * @since 1.0.5
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->propertyList[$name] = $value;
    }


    /**
     * @deprecated
     * @see ALib annotation for understand why deprecated, how and when resolve situation.
     * @since 1.0.5
     *
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return \array_key_exists($name, $this->propertyList);
    }

    private function getBaseLib(): ALib
    {
        if (null === $this->baseLib) {
            $this->baseLib = $this;
        }

        return $this->baseLib;
    }

    private function getBaseNamespace()
    {
        if (null === $this->baseNamespace) {
            $this->baseNamespace = '\\' . \str_replace($this->getThisClassName(), '', static::class);
        }

        return $this->baseNamespace;
    }

    private function getThisClassName()
    {
        if (empty($this->thisClassName)) {
            $this->thisClassName = '\\' . \substr(static::class, \strrpos(static::class, '\\') + 1);
        }

        return $this->thisClassName;
    }

    public function __call($methodName, $arguments)
    {
        if (!\array_key_exists($methodName, $this->methodList)) {
            $class = $this->getCalledClassName($methodName);
            $method = new $class;
            $method->lib = $this->getBaseLib();
            $this->methodList[$methodName] = $method;
        }

        return $this->methodList[$methodName]->run(...$arguments);
    }

    protected function getCalledClassName($methodName)
    {
        return $this->getBaseNamespace() . $this->getThisClassName() . '\\' . ucfirst($methodName);
    }

}