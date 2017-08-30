<?php

class Car
{
	function move()
	{
       echo "wheels helps the car to move";
	}
}
if(class_exists("car"))
{
	echo "class car exists";
	echo "<br/>";
}
else
{
	echo "noo class doesn't exist";
	echo "<br/>";
}
if(method_exists("car","move"))
{
	echo "method move exists";
	echo "<br/>";
}
else
{
	echo "no method exists";
}
?>