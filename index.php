<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Data\Amadeus\ZooConfiguration;
use Lib\Zoo;

$zoo = new Zoo(new ZooConfiguration());

$zoo->lifeCycle();
