<?php
namespace Decorator;

require_once './Planet.php';

class BasePlanet implements Planet
{
    public function create()
    {
        echo "\nThis is a Planet.\n";
    }
}
