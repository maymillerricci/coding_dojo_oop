<?php
	class Bike
	{
		var $price;
		var $max_speed;
		var $miles;

		function __construct($price, $max_speed)
		{
			// echo "creating a bike!<br><br>";
			$this->price = $price;
			$this->max_speed = $max_speed;
			$this->miles = 0;
		}

		function get_price()
		{
			return $this->price;
		}
		function get_max_speed()
		{
			return $this->max_speed;
		}
		function get_miles()
		{
			return $this->miles;
		}

		function displayInfo()
		{
			return  "price is " . $this->get_price() . "<br>" .
			  "max speed is " . $this->get_max_speed() . "<br>" . 
			  "miles is " . $this->get_miles() . "<br><br>";
		}

		function drive()
		{
			$this->miles += 10;
			return "Driving...  New miles is " . $this->miles . "<br>";
		}

		function reverse()
		{
			$this->miles -= 5;
			if($this->miles>=0)
			{
				return "Reversing...  New miles is " . $this->miles . "<br>";
			}
			else
			{
				$this->miles=0;
				return "Reversing...  You can't have negative miles...  New miles is " . $this->miles . "<br>";
			}
		}
	}
?>