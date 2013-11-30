<?php

	class Car
	{
		private $price;
		private $speed;
		private $fuel;
		private $mileage;
		private $tax;

		function __construct($price, $speed, $fuel, $mileage)
		{
			// echo "creating a car!<br>";
			$this->price=$price;
			$this->speed=$speed;
			$this->fuel=$fuel;
			$this->mileage=$mileage;
			if($this->price > 10000)
			{
				$this->tax = 0.15;
			}
			else
			{
				$this->tax = 0.12;
			}
			echo $this->Display_all();
		}

		// function get_price()
		// {
		// 	return $this->price;
		// }
		// function get_speed()
		// {
		// 	return $this->speed;
		// }
		// function get_fuel()
		// {
		// 	return $this->fuel;
		// }
		// function get_mileage()
		// {
		// 	return $this->mileage;
		// }
		// function get_tax()
		// {
		// 	return $this->tax;
		// }

		function Display_all()
		{
			return "Price: " . $this->price . "<br>" .
			"Speed: " . $this->speed . "<br>" .
			"Fuel: " . $this->fuel . "<br>" .
			"Mileage: " . $this->mileage . "<br>" .
			"Tax: " . $this->tax . "<br><br>";
		}
	}
?>