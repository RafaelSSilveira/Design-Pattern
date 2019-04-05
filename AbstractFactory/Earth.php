<?php
namespace AbstractFactory;

require_once './Planet.php';

#Concrete Product
class Earth extends Planet
{
    public function __construct()
    {
        parent::__construct();
    }

    public function showInfoPlanet()
    {
        $planet = "Planet: Earth. Type: Habitable";
        return $planet;
    }
}
