<?php
class Car
{
	var $wheels = 4;
	var $doors = 2;
	function moveWheels()
	{
		$this->wheels = 8;
	}
	function createDoor()
	{
		$this->doors = 6;
	}
}

class Plane extends Car
{
   var $doors = 4;
   //overriding method
   function createDoor()
   {
   	$this->doors = 20;
   }
}
$jet = new Plane();
echo $jet->wheels."<br/>";
$jet->moveWheels();
echo $jet->wheels."<br/>";

echo $jet->doors."<br/>";

$jet->createDoor();
echo $jet->doors;
?>