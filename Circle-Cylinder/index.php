<?php
include_once 'Circle.php';
include_once 'Cylinder.php';
$circle = new Circle(5,"blue");
echo $circle->toString();

echo "<br>";
$cylinder = new Cylinder(6,"red",20);
echo $cylinder->toString();