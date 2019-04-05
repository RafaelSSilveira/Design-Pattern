<?php
namespace TemplateMethod;

require_once './AbstractCelestial.php';

class Sun extends AbstractCelestial
{
    public function addComposite()
    {
        echo 'This make of helio </br>';
    }
}
