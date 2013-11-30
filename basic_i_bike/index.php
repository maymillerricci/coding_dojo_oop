<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bike</title>
		<?php include("class_lib.php"); ?>
	</head>
	<body>
		<?php
			$bike1 = new Bike(200, '25mph');
			echo "Bike 1: <br>" . $bike1->displayInfo();
			$bike2 = new Bike(100, '15mph');
			echo "Bike 2: <br>" . $bike2->displayInfo();
			$bike3 = new Bike(500, '50mph');
			echo "Bike 3: <br>" . $bike3->displayInfo();

			echo "Bike 1:<br>";
			echo $bike1->drive();
			echo $bike1->drive();
			echo $bike1->drive();
			echo $bike1->reverse();
			echo $bike1->displayInfo();

			echo "Bike 2:<br>";
			echo $bike2->drive();
			echo $bike2->drive();
			echo $bike2->reverse();
			echo $bike2->reverse();
			echo $bike2->displayInfo();

			echo "Bike 3:<br>";
			echo $bike3->reverse();
			echo $bike3->reverse();
			echo $bike3->reverse();
			echo $bike3->displayInfo();
		?>
	</body>
</html>