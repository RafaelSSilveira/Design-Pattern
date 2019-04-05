<?php
namespace Observer;

abstract class AbstractSubject
{
    abstract public function attach(AbstractObserver $observer_in);
    abstract public function detach(AbstractObserver $observer_in);
    abstract public function notify();
}
