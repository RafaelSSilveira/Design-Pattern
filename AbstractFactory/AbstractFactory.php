<?php
require_once './HabitablePlanet.php';
require_once './UninhabitablePlanet.php';
require_once './Earth.php';
require_once './Saturn.php';

use AbstractFactory\HabitablePlanet;
use AbstractFactory\UninhabitablePlanet;
use AbstractFactory\Earth;
use AbstractFactory\Saturn;

$habitablePlanet = new HabitablePlanet;
$earth = $habitablePlanet->createPlanet();

$object = new Earth();
$planet1 = $object->showInfoPlanet($earth);

$uninhabitablePlanet = new UninhabitablePlanet;
$saturn = $uninhabitablePlanet->createPlanet();

$object = new Saturn();
$planet2 = $object->showInfoPlanet($saturn);

echo $planet1;
echo '</br>';
echo $planet2;
