<?php
require_once './BasePlanet.php';
require_once './Atmosphere.php';
require_once './Satellite.php';

use Decorator\BasePlanet;
use Decorator\Atmosphere;
use Decorator\Satellite;

$planet = new BasePlanet();
$planet->create();

echo '</br>';

$planetAtmosphere = new Atmosphere($planet);
$planetAtmosphere->create();

echo '</br>';

$planetSatellite = new Satellite($planet);
$planetSatellite->create();

echo '</br>';

$planetFull = new Atmosphere(new Satellite($planet));
$planetFull->create();
