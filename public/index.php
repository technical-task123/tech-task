<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123;

// Include composer's autoload as the only autoload for this project.
require_once __DIR__ . '/../vendor/autoload.php';

// for more readable output in web browser.
\header('Content-type: text/plain');

/** @var IGlobalFunctionLib $lib */
$lib = new GlobalFunctionLib();

// Load animal collection from task.
$animal_collection = $lib->initAmadeusZooAnimalCollection();
$zoo = $lib->createObject(\Zoo::class);
$lib->setAnimalCollection($zoo, $animal_collection);

// run all animal actions from task in the order and with notice for sparrow->walk
$lib->live($zoo);
