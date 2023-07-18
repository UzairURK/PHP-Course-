<!DOCTYPE.html>
<html>
	<head>
	<title> if else </title>
	</head>
	
<body>
	
	<?php
	echo "if else <br>";
	$value1 = 1321;
	$value2 = 1321;
	if( $value1 == $value2 ) {
		echo $value1 ." = " .$value2;
	} // end if
	else {
		echo "<br>";
		echo $value1 ." not equal " .$value2;
	} // end else
	$city = "syedny";
	if( $city == "london" ) {
		echo "<br>";
		echo $city . " is in Australia";
	} // end if
	else {
		echo "<br>";
		echo $city . " is not in Australia";
	} // end else
	$person = "Xubair";
	$weight = 80;
	
	if( $person <= 80 ) {
		echo "<br>";
		echo $person . " is not very fat";
	} // end of if
	else {
		echo "<br>";
		echo $person . " is very fat";
	} // end of else
	
	// Switch 
	$grade = "A";
	Switch($grade){
		case "A":
		echo "<br>The Best <br>";
		break;
		case "B":
		echo " Good <br>";
		break;
		case "C":
		echo "Average <br>";
		break;
		Default:
		echo "Fail";
		
	} // end switch
	
	// end of php  ?> 

</body>

<html>