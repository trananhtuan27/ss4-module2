<?php


class MovablePoint extends Point
{
public $xSpeed;
public $ySpeed;
public function getXSpeed(){
    return $this->x . $this->xSpeed;
}
public function setXSpeed($x,$xSpeed){
    $this->x = $x;
    $this->xSpeed = $xSpeed;
}
    public function getYSpeed(){
        return $this->y . $this->ySpeed;
    }
    public function setYSpeed($y,$ySpeed){
        $this->y = $y;
        $this->ySpeed = $ySpeed;
    }
    public function toString()
    {
        return parent::toString() . $this->xSpeed .$this->ySpeed;
    }
}