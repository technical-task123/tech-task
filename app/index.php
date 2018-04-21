<?php

namespace App;

require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use \App\Zoo\Animal;

$animals = [
    new Animal('cat'), new Animal('dog'), new Animal('sparrow'), new Animal('rat')
];

foreach($animals as $animal) {
    switch($animal->name)
    {
        case 'cat':
            $animal->walk();
            $animal->meow();
            break;
        case 'dog':
            $animal->walk();
            $animal->run();
            $animal->wuf();
            $animal->byte('man');
            break;
        case 'sparrow':
            $animal->walk();
            $animal->tweet();
            $animal->fly();
            break;
        case 'rat':
            $animal->pi();
            break;
    }
    $animal->eat('food');
}