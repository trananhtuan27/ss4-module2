<?php


class Point3D extends Point2D
{
public $z;

public function get_XYZ(){
    return $this->x . $this->y . $this->z;
}
public function set_XYZ($x, $y, $z){
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
}
public function toString()
{
    return parent::toString() . $this->z;
}
}