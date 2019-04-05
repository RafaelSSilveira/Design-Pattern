<?php
namespace AbstractFactory;

require_once './PlanetFactory.php';

#ConcreteFactory
class HabitablePlanet extends PlanetFactory
{
    public function __construct()
    {
        parent::__construct();
    }

    public function createPlanet()
    {
        return new HabitablePlanet();
    }
}
