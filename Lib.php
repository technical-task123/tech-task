<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 19:12
 */
class Lib
{
    public function walk($object)
    {
        $f = $this;
        if ($object instanceof IWalkable) {
            $f->action($object, 'walking');
        } else {
            $f->objectNotInstanceOf($object, IWalkable::class);
        }

    }

    public function action($object, $action, $action_param = null)
    {
        $f = $this;

        if (\method_exists($object, $action)) {
            $object->$action($f, $action_param);
            return;
        }

        $message = $f->getName($object) . ' ' . $action;

        if ($action_param !== null) {
            $message .= ' ' . $action_param;
        }

        echo $message . PHP_EOL;
    }

    public function getName($object)
    {
        return $object->name;
    }

    public function objectNotInstanceOf($object, $type)
    {
        $message = \get_class($object) . ' not implement interface ' . $type;
        \trigger_error($message, E_USER_NOTICE);
    }

    public function live($object)
    {
        $f = $this;
        $lifeCycle = $f->getLifeCycle($object);
        $lifeCycle::run($f, $object);
    }

    public function getLifeCycle($object)
    {
        return $object->lifeCycle;
    }

    public function initAmadeusZooAnimalCollection()
    {
        $f = $this;
        $animals = [
            $f->createAnimal('cat', Cat::class),
            $f->createAnimal('dog', Dog::class),
            $f->createAnimal('sparrow', Sparrow::class),
            $f->createAnimal('rat', Rat::class),
            $f->createAnimal('monkey')
        ];

        return $animals;
    }

    public function createAnimal($name, $class = Animal::class)
    {
        $f = $this;
        $animal = $f->createObject($class);
        $f->setName($animal, $name);
        return $animal;
    }

    public function createObject($class)
    {
        return new $class();
    }

    public function setName($object, $name)
    {
        $object->name = $name;
    }

    public function setAnimalCollection(IhasAnimalCollection $object, $collection)
    {
        $object->animalCollection = $collection;
    }
}