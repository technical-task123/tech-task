<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123;

// Only for auto complete by IDE.

// Include composer's autoload as the only autoload for this project.
require_once __DIR__ . '/../vendor/autoload.php';

/** @var ILib $lib */
$lib = new Lib();

// Load animal collection from task.
$animal_collection = $lib->initAmadeusZooAnimalCollection();
$zoo = $lib->createObject(\Zoo::class);
$lib->setAnimalCollection($zoo, $animal_collection);

$lib->live($zoo);
