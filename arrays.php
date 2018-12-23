<?php
	#Array - Variable that holds multiple values
	/*
		- Indexed
		- Associative
		- Multi-dimensional
	*/

	// Indexed
	$people = array('Kevin', 'Jeremy', 'Sara');
	$ids = array(23, 55, 12);
	$cars = ['Honda', 'Toyota', 'Ford'];
	$cars[3] = 'Chevy';
	$cars[] = 'BMW'; // Add an item to the array

	//echo count($cars);
	//print_r($cars); // prints the entire array
	//var_dump($cars); // prints the type of the data

	//echo $people[3];
	//echo $ids[2];
	//echo $cars[4];

	// Associative arrays
	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37); // hey => value
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

	//echo $people['Brad'];
	//echo $ids[22];
	$people['Jill'] = 42;
	//echo $people['Jill']; 
	//print_r($people); // prints the entire array
	//var_dump($people); // prints the type of the data

	//Multi-Dimensional
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 20),
		array('Ford', 23, 12)
	);

	echo $cars[1][2];
?>