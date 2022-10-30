<?php

require_once 'Vehicle.php';
class Bycicle extends Vehicle
{

}
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);