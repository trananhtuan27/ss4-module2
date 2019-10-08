<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;

    }

    public function calculatePerimeter()
    {
        return $this->radius * 2 * pi();
    }

    public function calculateArea(){
        return pow($this->radius,2)*pi();
    }

    public function toString(){
        return "Bán kính hình tròn là $this->radius và màu của nó là $this->color";
    }
  }