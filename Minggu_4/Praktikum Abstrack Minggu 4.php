<?php 
class Car
{
	final public function hello()
	{
		return "beep";
	}
}

class SportsCar extends Car
{
	public function hello()
	{
		return "Hallo";
	}
}
abstract class Car{
	abstract public function calcNuMilesOnFullTank();
}

$sportsCar1 = new SportsCar();

echo $sportsCar1 -> hello(); ?>