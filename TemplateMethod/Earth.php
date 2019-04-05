<?php
namespace TemplateMethod;

require_once './AbstractCelestial.php';

class Earth extends AbstractCelestial
{
    public function addComposite()
    {
        echo 'This make of iron </br>';
    }
}
