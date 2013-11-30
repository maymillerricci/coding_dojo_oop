<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Animal</title>
		<?php include("class_lib.php") ?>
	</head>
	<body>
	<?php  
	$animal = new Animal('animal');
	$animal->walk();
	$animal->walk();
	$animal->walk();
	$animal->run();
	$animal->run();
	echo $animal->displayHealth();

	$dog = new Dog('dog');
	$dog->walk();
	$dog->walk();
	$dog->walk();
	$dog->run();
	$dog->run();
	$dog->pet();
	echo $dog->displayHealth();

	$dragon = new Dragon('dragon');
	$dragon->walk();
	$dragon->walk();
	$dragon->walk();
	$dragon->run();
	$dragon->run();
	$dragon->fly();
	$dragon->fly();
	echo $dragon->displayHealth();

	// $animal->fly(); //doesn't work b/c Animal can't fly or pet
	// $animal->pet();
	?>
	</body>
</html>