<!DOCTYPE.html>
<html>
	<head>
	<title> php test </title>
	</head>
	
<body>
	
	<form action = "" method = "get">
	Write Anything: <input type = "text" name = "text"/>
	<input type = "submit" value = "Press Now" />
	
	</form>
	
	<?php
	echo " Global Variables <br>";
	// global variables: they are variables that can give us data(text, ip adreess, images)) from browser
	
	
	//echo $_GET[ 'text' ]; // to print set method "get" in the above form
	//echo $_POST[ 'text' ]; // to print set method "post" in the above form
	echo $_SERVER[ 'REMOTE_ADDR' ]; // It is to get the user ip adress.to print set method "get" in the above form. 
	$_FILES = [];
	$_SESSION = [];
	$_REQUEST = [];
	
	
	// end of php  ?> 

</body>

<html>