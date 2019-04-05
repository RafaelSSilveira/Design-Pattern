<?php
require_once './PatternSubject.php';
require_once './PatternObserver.php';

use Observer\PatternObserver;
use Observer\PatternSubject;

$earth = new PatternSubject();
$alien = new PatternObserver();
$earth->attach($alien);
$earth->updateCows('cow 1, cow 2, cow 3');
$earth->updateCows('cow 1, cow 4, cow2');
$earth->detach($alien);
$earth->updateCows('cow 1, cow 4, cow 5');
