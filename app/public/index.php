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

use \App\Zoo\animals;

$animals = [
    new animals\Cat, new animals\Dog, new animals\Sparrow, new animals\Rat
];

$result = '';

foreach($animals as $animal) {
    switch($animal->getName())
    {
        case 'cat':
            $result .= $animal->walk();
            $result .= $animal->meow();
            break;
        case 'dog':
            $result .= $animal->walk();
            $result .= $animal->run();
            $result .= $animal->wuf();
            $result .= $animal->bite('man');
            break;
        case 'sparrow':
            $result .= $animal->walk();
            $result .= $animal->tweet();
            $result .= $animal->fly();
            break;
        case 'rat':
            $result .= $animal->pip();
            break;
    }
    $result .= $animal->eat('food');
}
echo $result;