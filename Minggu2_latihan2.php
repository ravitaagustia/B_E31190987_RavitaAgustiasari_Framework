<?php
class Car {
	
	public $tank;
	// Add gallons of fuel to the tank when we fill it.
	public function fill($float)
	{
		$this-> tank += $float;
		return $this;
	}

	// Substract gallons of fuel from the tank as we ride the car.
	public function ride($float)
	{
		$miles = $float;
		$gallons = $miles/50;
		$this-> tank -= ($gallons);

		return $this;
	}
}

//create a new object from the car class.
$bmw = new Car () ;

// Add 10 gallons of fuel, then ride 40 miles,
// and get the number of gallons in the tank.
$tank = $bmw -> fill(10) -> ride(40) -> tank;

// Printout.
echo "The numer og gallons left in the tank: " . $tank . " gal.";
?>