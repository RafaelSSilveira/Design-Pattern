<?php
require_once './PlanetAdapter.php';
require_once './HabitablePlanet.php';
use Adapter\PlanetAdapter;
use Adapter\HabitablePlanet;

#Client
$planet = new PlanetAdapter(new HabitablePlanet());
$planet->create();
