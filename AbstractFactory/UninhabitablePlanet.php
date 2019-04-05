<?php
namespace AbstractFactory;

require_once './PlanetFactory.php';

#ConcreteFactory
class UninhabitablePlanet extends PlanetFactory
{
    public function __construct()
    {
        parent::__construct();
    }

    public function createPlanet()
    {
        return new UninhabitablePlanet();
    }
}
