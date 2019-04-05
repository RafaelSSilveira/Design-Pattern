<?php
namespace Decorator;

require_once './PlanetDecorator.php';
require_once './BasePlanet.php';

class Satellite extends PlanetDecorator
{
    public function __construct(Planet $planet)
    {
        parent::__construct($planet);
    }

    public function create()
    {
        parent::create();
        echo "Add Satellite to planet.\n";
    }
}
