<?php
namespace Observer;

require_once './AbstractObserver.php';

class PatternObserver extends AbstractObserver
{
    public function __construct()
    {
    }
    public function update(AbstractSubject $subject)
    {
        echo ('Alert! </br>');
        echo (' Cows in the grass: '.$subject->getCows() . '</br>');
        echo ('Alert! </br> </br>');
    }
}
