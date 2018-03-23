<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 23:28
 */

spl_autoload_register(function ($class) {
    static $class_map;

    if (null === $class_map) {
        $class_map = require_once __DIR__ . '/class_map';
    }

    if (isset($class_map[$class])) {
        require_once realpath(__DIR__ . '/' . $class_map[$class]);
    }
});