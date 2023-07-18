<!DOCTYPE.html>
<html>
	<head>
	<title> php array </title>
	</head>
	
<body>
	
	<?php
	echo "Arrays <br>";
	$city = array("Iaslamabad is in Pakistan", "Mumbai is in India", "New York is in USA", 
	"London is in UK", "Tokyo in Japan", "Istanbul is in Turkey", 6);
	
	echo "<b>Where is Islamabad</b> <br>". $city[0] . "<br>";
	echo "<b>Where is Mumbai</b> <br>". $city[1] . "<br>";
	echo "<b>Where is New York</b> <br>". $city[2] . "<br>";
	echo "<b>Where is London</b> <br>". $city[3] . "<br>";
	echo "<b>Where is Tokyo</b> <br>". $city[4] . "<br>";
	echo "<b>Where is Istanbul</b> <br>". $city[5] . "<br>";
	echo "<b>Total number of cities </b> <br>". $city[6] . "<br>";
	echo "<br> the length of array = " . count($city); 
	
	
	
	
	// end of php  ?> 

</body>

<html>