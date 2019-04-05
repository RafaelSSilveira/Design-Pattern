<?php
namespace TemplateMethod;

abstract class AbstractCelestial
{
    final public function create()
    {
        $this->addGravity();
        $this->addComposite();
    }

    public function addGravity()
    {
        echo("Add Gravity </br>");
    }
    abstract public function addComposite();
}
