<?php

require_once './Sun.php';
require_once './Earth.php';
use TemplateMethod\Sun;
use TemplateMethod\Earth;

echo 'Sun </br>';
$sun = new Sun();
$sun->create();

echo 'Earth </br>';
$earth = new Earth();
$earth->create();
