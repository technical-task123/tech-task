<?php

/**
 * index.php
 *
 * PHP version 7.0
 *
 * Index file of Zoo application
 *
 * @author Igor S <igor.shp@i.ua>
 */

namespace App;

require_once '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
require_once AUTOLOADER_PATH;

use App\Zoo\Zoo;

$zoo = new Zoo(['cat', 'dog', 'sparrow', 'rat',]);
echo $zoo->treatAnimals();
