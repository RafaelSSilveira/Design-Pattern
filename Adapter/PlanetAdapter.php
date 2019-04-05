<?php
namespace Adapter;

require_once './HabitablePlanet.php';

#Adapter
class PlanetAdapter
{
    private $habitablePlanet;
    
    public function __construct(HabitablePlanet $habitablePlanet)
    {
        $this->habitablePlanet = $habitablePlanet;
    }
     
    public function create()
    {
        $this->habitablePlanet->createHabitable();
    }
}
