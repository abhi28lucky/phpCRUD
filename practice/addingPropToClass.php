<?php

class Car
{
	var $wheels = 4;
	var $doors = 4;
	function moveWheels()
	{
		$this->wheels = 8;
	}
	function createDoor()
	{
		$this->doors = 6;
	}
}

$bmw = new Car();

echo $bmw->wheels."<br/>";

$bmw->moveWheels();
echo $bmw->wheels."<br/>";

echo $bmw->doors."<br/>";

$bmw->wheels = 10;
echo $bmw->wheels."<br/>";

$truck = new Car();
$truck->wheels = 10;
echo $truck->wheels."<br/>";

$truck->createDoor();
echo $truck->doors; 

?>