<!DOCTYPE html>
<html>
<head>
    <title> Loops </title>
</head>
<body>
    <?php
    echo "Loops<br>"; // Semicolon added here

    // 1) while Loop
	echo "while loop<br>";
    $num = 0;
    while( $num < 30 ) {
        $num++;
        echo $num . " ";
    }
    // 2) for loop
	echo "for loop<br>";
	for ( $year = 1940; $year <= 2018; $year++ ) {
		echo " Year Number " .$year ."<br>";
	}
	
    // 3) foreach loop
	echo "foreach loop <br>";
	$city = array("Lahore", "Karachi", "Islamabad", "Quetta", "Peshawar");
	foreach ( $city as $value ) {
		echo $value ."<br>";

	}
    // end of php  ?>
</body>
</html>
