<?php
	include("country.php");
	
	//process class
	class Process extends Country
	{
		//constructor for process class
		public function __construct()
		{
			$data=array();

			//instantiate database
			new Database;

			//run get countries function and create dropdown list with country names
			$countries = $this->get_countries();
			$data['countries'] = $countries;

			//check if country form was submitted and run get country info function
			if(isset($_POST) && isset($_POST['country']))
			{
				$country_info = $this->country_info();
				$data['country_info'] = $country_info;				
			}

			//encode data to json for ajax
			echo json_encode($data);
		}
	}
	
	//instantiate process
	$process = new Process();	

?>