<?php
namespace Strategy;

require_once './AbstractStrategy.php';

#Concrete Strategy
class Saturn extends AbstractStrategy
{
    public function calcule($param)
    {
        echo($param * 1.15);
    }
}
