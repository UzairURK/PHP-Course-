<!DOCTYPE html>
<html>
<head>
    <title> Task day 2 </title>
</head>
<body>
    <?php
    echo "Task day 2<br>"; // Semicolon added here
	// Task 1)
	// statement: Task 1) Assign values in an array and display them like that
     // [ 1 2 3]
      //[ 4 5 6]
      //[ 7 8 9]
	  $number = array (1,2,3,4,5,6,7,8,9);
	  
	  for ($i = 0; $i < count($number); $i++) {
		if ($i % 3 == 0) {
			echo "[ ";
		}
		echo $number[$i] . " ";
		if (($i + 1) % 3 == 0) {
			echo "]<br>";
		}
	}
	
	/*
	Task 2) Difference between index and associative array
	
	Indexed Arrays:

		Indexed arrays are arrays where each element is assigned a numeric index, 
		starting from 0 for the first element, 1 for the second, and so on.
		The elements are stored in a sequential order, and their positions 
		are identified by numeric keys.
		Indexed arrays are useful when you want to work with a collection 
		of similar items and access elements by their numerical positions.
		*/
		$fruits = array('Apple', 'Orange', 'Banana');
		echo "<br>Index Array: <br>";
		echo $fruits[0]; // Output: Apple
		echo "<br>";
		echo $fruits[1]; // Output: Orange
		echo "<br>";
		echo $fruits[2]; // Output: 
		/*
		Associative array: 
			Associative arrays are arrays where each element is associated with
			a specific key or name, instead of a numeric index.
			The elements are stored as key-value pairs, where the key serves as a unique
			 identifier for the value it is associated with.
			Associative arrays are useful when you need to store and access data based 
			on custom keys or labels.

	*/
		$student = array(
		'name' => 'John',
		'age' => 25,
		'major' => 'Computer Science'
	);
		echo "<br> Associative Array <br>";
		echo $student['name'];  // Output: John
		echo "<br>";
		echo $student['age'];   // Output: 25
		echo "<br>";
		echo $student['major']; // Output: Computer Science

	/*
	Task 3)  Write an example of Foreach and while loop.
	*/

		echo "<br>";
		foreach($student as $x => $val) {
		  echo "$x = $val<br>";
		  
}

	
	



  // end of php  ?>
</body>
</html>
