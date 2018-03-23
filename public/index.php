<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use DanchukAS\Implementation\AmadeusZooConfiguration;
use DanchukAS\Implementation\Zoo;

$zoo = new Zoo(new AmadeusZooConfiguration());

$zoo->live();
