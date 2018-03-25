<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

//class Animal
//{
//    public function byte($object)
//    {
//        echo $this->name . ' has bitten' . $object;
//    }
//}


$lib = new Lib();

$animal_collection = $lib->initAmadeusZooAnimalCollection();
$zoo = $lib->createObject(Zoo::class);
$lib->setAnimalCollection($zoo, $animal_collection);

// for not mix error and output.
ob_start();

$lib->live($zoo);

sleep(1);
ob_end_flush();



// @todo setFunctionalityLib  ... create functionalityObject extends Functionality Object
// @todo composer auto update
// @todo namespace DanchukAS/tech-task-123 but what about conflict and easy replace ?
// @todo composer.json max
// @todo composer  "provide": {"DanchukAS/Zoo": "1.0.*"}
// @todo docker
// @todo phpunit
// @todo service coverage
// @todo service php-codesnifer analise
// @todo add badge to readme
// @todo add comment to functions
// @todo add my explains to readme
// @todo push 2 variant
// @todo pullRequest to Amadeus
// @todo documentation for ILibGenerator.php, LibFunction
// @todo say Olga by skype

//foreach ($animal_collection as $animal) {
//
//    switch($animal->name)
//    {
//        case 'dog':
// @todo man beat dog
//            $animal->byte('man');
//            break;
//    }
//
//}
