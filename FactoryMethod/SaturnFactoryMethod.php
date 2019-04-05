<?php
namespace FactoryMethod;

require_once './AbstractFactoryMethod.php';
require_once './Saturn.php';

use FactoryMethod\AbstractFactoryMethod;
use FactoryMethod\Saturn;

#ConcreteFactory
class SaturnFactoryMethod extends AbstractFactoryMethod
{
    public function __construct()
    {
        parent::__construct();
    }

    public function createSaturn()
    {
        return new Saturn;
    }
}
