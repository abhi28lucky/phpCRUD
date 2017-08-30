<?php
class Car
{
	var $wheels = 4;
	function __construct()
	{
		echo $this->wheel = 10;
		echo "<br/>";
	}
}
$bmw = new car();
$mercedez = new car();
$truck = new Car();

/*everytime we create new object constructor is executed automatically ie for default value while creating object
defined by double underscore construct as above.*/
?>