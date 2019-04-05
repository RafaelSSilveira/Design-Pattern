<?php
namespace AbstractFactory;

#Abstract Product
abstract class Planet
{
    protected function __construct()
    {
    }
    
    abstract public function showInfoPlanet();
}
