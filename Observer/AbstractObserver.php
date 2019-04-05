<?php
namespace Observer;

abstract class AbstractObserver
{
    abstract public function update(AbstractSubject $subject_in);
}
