<?php
include_once 'Point2D.php';
include_once 'Point3D.php';
$point2d = new Point2D();
$point2d->set_XY(1,2);
echo $point2d->toString();
$point3d = new Point3D();
$point3d->set_XYZ(2,2,4);
echo $point3d->toString();