<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>HTML Helper</title>
		<link rel="stylesheet" href="index.css">
		<?php include "class_lib.php"; ?>
	</head>
	<body>
	<?php
	//instantiate instance of HTML_Helper (called new_helper)
	$new_helper = new HTML_Helper();  
	echo "<h3>Print Table</h3>";
	//create users array (multi-dimensional)
	$users = array(
				array(
					"id" => 1,
					"first_name" => "Michael", 
					"last_name" => "Choi", 
					"nickname" => "Sensei"),
				array(
					"id" => 2,
					"first_name" => "Eylem", 
					"last_name" => "Ozaslan", 
					"nickname" => "Wizard"),
				array(
					"id" => 3,
					"first_name" => "May", 
					"last_name" => "M-R", 
					"nickname" => "Apprentice")
				);
	//calls print_table on users array, which it can do via new_helper object b/c 
	//new_helper is an instance of the HTML Helper class which has that print_table method...?
	echo $new_helper->print_table($users);  

	echo "<br><br><br>";

	echo "<h3>Print Select</h3>";
	$sample_array = array("CA", "WA", "UT", "TX", "AZ", "NY");
	echo $new_helper->print_select("state", $sample_array); 
	?>
	</body>
</html>