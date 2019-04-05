<?php
namespace AbstractFactory;

#Abstract Factory
abstract class PlanetFactory
{
    protected function __construct()
    {
    }

    abstract public function createPlanet();
}
