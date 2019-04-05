<?php
namespace Strategy;

require_once './AbstractStrategy.php';

#Context
class Context
{

    private $strategy;

    public function __construct(AbstractStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(AbstractStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute()
    {
        echo "Weight ";
        $result = $this->strategy->calcule(95);
    }
}
