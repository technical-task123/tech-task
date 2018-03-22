<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Lib\Implementation\Zoo;
use Lib\Implementation\ZooConfiguration;

$zoo = new Zoo(new ZooConfiguration());

$zoo->live();
