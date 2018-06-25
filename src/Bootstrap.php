<?php declare(strict_types=1);
define('ROOT_DIR', dirname(__DIR__));
require ROOT_DIR . '/vendor/autoload.php';

$animalsList = ['cat', 'dog', 'sparrow', 'rat'];

foreach ($animalsList as $name) {
    $animal = TestTask\Entities\AnimalFactory::makeAnimal($name);
    $animal->runAction();
    $animal->eat('food');
}
