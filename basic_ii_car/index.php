<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Car</title>
		<?php include("class_lib.php"); ?>
	</head>
	<body>
		<?php
			echo "Car 1:<br>";
			$car1 = new Car(20000, '100mph', 'Full', '30mpg');
			echo "Car 2:<br>";
			$car2 = new Car(8000, '50mph', 'Not Full', '25mpg');
			echo "Car 3:<br>";
			$car3 = new Car(10000, '80mph', 'Full', '40mpg');
			echo "Car 4:<br>";
			$car4 = new Car(5000, '70mph', 'Empty', '20mpg');
			echo "Car 5:<br>";
			$car5 = new Car(200000, '200mph', 'Super Full', '35mpg');
		?>
	</body>
</html>