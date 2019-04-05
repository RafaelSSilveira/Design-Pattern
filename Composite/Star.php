<?php
namespace Composite;

require_once './Component.php';

#Leaf
class Star implements Component
{
    public function show($args)
    {
        echo 'Celestial Body:' . $args . '</br>';
    }
}
