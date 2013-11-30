<?php
	class Animal
	{
		private $name;
		private $health;

		function __construct($name)
		{
			$this->name=$name;
			$this->health=100;
		}

		// function get_name()
		// {
		// 	return $this->name;
		// }
		// function get_health()
		// {
		// 	return $this->health;
		// }
		
		// function set_health($new_health)
		// {
		// 	$this->health = $new_health;
		// }

		function walk()
		{
			$this->health-=1;
		}
		function run()
		{
			$this->health-=5;
		}
		function displayHealth()
		{
			return $this->name . ": health = " . $this->health . "<br>";
		}
	}

	class Dog extends Animal
	{
		function __construct($name)
		{
			parent::__construct($name);
			// $this->name=$name;	//is this necessary?  (it's repeating a part that is staying the same from the parent class...)
			// $this->health=150;  //better to use set function??:
			$this->health = 150;
		}

		function pet()
		{
			$this->health+=5;
		}
	}

	class Dragon extends Animal
	{
		function __construct($name)
		{
			parent::__construct($name);
			$this->health=170;
		}

		function fly()
		{
			$this->health-=10;
		}

		function displayHealth()
		{
			return "This is a dragon!<br>" . parent::displayHealth();
		}
	}
?>