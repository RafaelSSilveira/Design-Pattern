<?php
namespace Strategy;

require_once './Context.php';
require_once './Earth.php';
require_once './Saturn.php';

$context = new Context(new Earth);

echo "Earth:\n";
$context->execute();

echo "</br>";

echo "Saturn:";
$context->setStrategy(new Saturn);
$context->execute();
