<?php
include_once 'Point.php';
include_once 'MovablePoint.php';
$point = new Point();
$point->set_XY(12,3);
echo $point->toString();
$movablepoint = new MovablePoint();
$movablepoint->setXSpeed(1,2);
$movablepoint->setYSpeed(3,4);
echo $movablepoint->toString();