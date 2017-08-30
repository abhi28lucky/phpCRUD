<?php

class Car
{
	function moveWheels()
	{
		echo "move the car"."<br/>";
	}
}

 $bmw = new Car();
 $mercedez = new Car();

 $bmw->moveWheels();
 $mercedez->moveWheels();

?>