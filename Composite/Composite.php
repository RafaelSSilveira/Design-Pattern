<?php
require_once './Star.php';
require_once './Galaxy.php';

use Composite\Star;
use Composite\Galaxy;

// Client
$star = new Star();
$galaxy = new Galaxy();

$star->show('Sirius');
$star->show('Vega');

echo '</br>';
$galaxy->show('Andromeda');

$galaxy->add('Betelguese');
$galaxy->add('Antares');

$galaxy->show('Andromeda');

echo '</br>';
$galaxy->remove();
$galaxy->show('Andromeda');

echo '</br>';
