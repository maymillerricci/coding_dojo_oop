<?php
	include("connection.php");
	 
	//country class
	class Country extends Database
	{
		//constructor for country class
		public function __construct()
		{
			//instantiate database - not necessary
			// new Database;
		}

		//define get countries function
		public function get_countries()
		{
			$query = "SELECT name FROM country ORDER BY name";
			return $this->fetch_all($query);
		}

		//define country info function
		public function country_info()
		{
			$query="SELECT name, continent, region, population, lifeexpectancy, governmentform  
					FROM country 
					WHERE name='" . $_POST['country'] . "'";
			return $this->fetch_record($query);
		}	
	}
?>