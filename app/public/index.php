<?php

/**
 * index.php
 *
 * Index file of Zoo application
 *
 * @author Igor <igor.shp@i.ua>
 */

namespace App;

require_once '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Zoo\Zoo;

$zoo = new Zoo(['cat', 'dog', 'sparrow', 'rat',]);
echo $zoo->treatAnimals();
