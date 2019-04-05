<?php
namespace Composite;

require_once './Component.php';

#Composite
class Galaxy implements Component
{
    private $celestialBodies = array();

    public function show($args)
    {
        echo 'Galaxy:' . $args . '</br>';
        foreach ($this->celestialBodies as $value) {
            echo 'Celestial Body:' . $value . '</br>';
        }
    }

    public function add($celestial)
    {
        array_push($this->celestialBodies, $celestial);
    }

    public function remove()
    {
        array_pop($this->celestialBodies);
    }
}
