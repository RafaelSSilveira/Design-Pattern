<?php

require_once './SaturnFactoryMethod.php';
use FactoryMethod\SaturnFactoryMethod;

$factoryMethodInstance = new SaturnFactoryMethod;
$saturn = $factoryMethodInstance->createSaturn();
echo $saturn->showInfoPlanet();
