<?php
declare(strict_types=1);

// Base namespace for this project - technical task from Amadeus team
namespace DanchukAS\AmadeusTechTask123;

// Include composer's autoload as the only autoload for this project.
require_once __DIR__ . '/../vendor/autoload.php';

// More readable(than default html) output in web browser
// without any changes in project's functions.
// It is not necessary to set Content-type in web server config.
\header('Content-type: text/plain');

/** @var IGlobalFunctionLib $lib */
$lib = new GlobalFunctionLib();

// Load animal collection from task.
// @todo initAmadeusZooAnimalCollection Remake as object, and function for init it.
// example $zoo = $lib->buildZoo(AmadeusAnimalCollection::class);
$animal_collection = $lib->initAmadeusZooAnimalCollection();
$zoo = $lib->buildZoo($animal_collection);

// run all animal actions from task in the order and with notice for sparrow->walk
$lib->live($zoo);
