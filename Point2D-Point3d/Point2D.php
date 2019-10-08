<?php


class Point2D
{
    public $x;
    public $y;

    public function get_X()
    {
        return $this->x;
    }

    public function set_X($x)
    {
        $this->x = $x;
    }

    public function get_Y()
    {
        return $this->y;
    }

    public function set_Y($y)
    {
        $this->y = $y;
    }

    public function get_XY()
    {
        return $this->x . $this->y;
    }

    public function set_XY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function toString(){
        return "$this->x,$this->y";
    }
}