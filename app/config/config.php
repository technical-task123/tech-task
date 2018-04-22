<?php

/**
 * config.php
 *
 * PHP version 7.0
 *
 * Index file of Zoo application
 *
 * @author Igor <igor.shp@i.ua>
 */

define("_DS", DIRECTORY_SEPARATOR);
define("PROJECT_DIR", __DIR__ . _DS . '..' . _DS);
define("VENDOR_DIR", PROJECT_DIR . 'vendor');
define("AUTOLOADER_PATH", VENDOR_DIR . _DS . 'autoload.php');

define("DEBUG_MODE", !empty($_ENV['ZOO_DEBUG_MODE']));

ini_set("display_errors", DEBUG_MODE);
