<?php
namespace FactoryMethod;

require_once './AbstractPlanet.php';
use FactoryMethod\AbstractPlanet;

#Concrete Product
class Saturn extends AbstractPlanet
{
    public function showInfoPlanet()
    {
        return 'This is Saturn';
    }
}
