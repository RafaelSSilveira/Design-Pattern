<?php
namespace FactoryMethod;

#Creator
abstract class AbstractFactoryMethod
{
    protected function __construct()
    {
    }
    abstract public function createSaturn();
}
