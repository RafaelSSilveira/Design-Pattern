<?php
namespace AbstractFactory;

require_once './Planet.php';

#Concrete Product
class Saturn extends Planet
{
    public function __construct()
    {
        parent::__construct();
    }

    public function showInfoPlanet()
    {
        $planet = "Planet: Saturn. Type: Uninhabitable";
        return $planet;
    }
}
