<?php
declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

//class Animal
//{
//    public function byte($object)
//    {
//        echo $this->name . ' has bitten' . $object;
//    }
//}


$f = new Lib();

$animal_collection = $f->initAmadeusZooAnimalCollection();
$zoo = $f->createObject(Zoo::class);
$f->setAnimalCollection($zoo, $animal_collection);
$f->live($zoo);

//foreach ($animal_collection as $animal) {
//
//    switch($animal->name)
//    {
//        case 'dog':
//            $animal->byte('man');
//            break;
//    }
//
//}