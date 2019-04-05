<?php
namespace Decorator;

require_once './Planet.php';

class PlanetDecorator implements Planet
{
    protected $planet;

    public function __construct(Planet $planet)
    {
        $this->planet = $planet;
    }

    public function create()
    {
        $this->planet->create();
    }
}
