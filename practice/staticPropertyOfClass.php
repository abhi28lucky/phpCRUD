<?php

class Car
{
	static $wheels = 4;
	function showProperty()
	{
         Car::$wheels = 10;
	}
}

echo Car::$wheels;
echo "<br/>";
Car::showProperty();
echo Car::$wheels;
//to use static property use className::staticVariable
?>