<?php
class Car
{
	public $wheels = 4;
	protected $hood = 1;
	private $engine = 1;
	var $doors = 4;
	function showProperties()
	{
		echo $this->hood;
		echo "<br/>";
		echo $this->engine;
		echo "<br/>";
	}
}
$bmw = new Car();
echo $bmw->wheels."<br/>";
//echo $bmw->hood."<br/>";
$bmw->showProperties();
echo "<br/>";

class Semi extends Car
{
    function showProperties() //overriding
	{
		echo $this->hood;
		//echo $this->engine; //since private cant be used outside the class
	}
}
$truck = new Semi();
$truck->showProperties()."<br/>";

?>