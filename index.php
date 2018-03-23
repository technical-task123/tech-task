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

$animalCollection = $f->initAmadeusZooAnimalCollection();
$zoo = $f->createObject(Zoo::class);
$f->setZooAnimalCollection($zoo, $animalCollection);
$f->live($zoo);

foreach ($animalCollection as $animal) {

//    switch($animal->name)
//    {
//        case 'dog':
//            $animal->byte('man');
//            break;
//    }

}