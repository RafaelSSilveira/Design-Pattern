<?php
namespace Observer;

require_once './AbstractSubject.php';
require_once './AbstractObserver.php';

#Subject
class PatternSubject extends AbstractSubject
{
    private $observers = array();
    public function __construct()
    {
    }
    public function attach(AbstractObserver $observer_in)
    {
        $this->observers[] = $observer_in;
    }
    public function detach(AbstractObserver $observer_in)
    {
        foreach ($this->observers as $okey => $oval) {
            if ($oval == $observer_in) {
                unset($this->observers[$okey]);
            }
        }
    }
    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }
    
    public function updateCows($newFavorites)
    {
        $this->favorites = $newFavorites;
        $this->notify();
    }
    public function getCows()
    {
        return $this->favorites;
    }
}
